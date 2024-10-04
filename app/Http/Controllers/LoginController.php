<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // View for login form (e.g., resources/views/auth/login.blade.php)
    }

    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Find the account by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists and the password is correct
        if ($user && Hash::check($request->password, $user->password_akun)) {
            // Login the user
            Auth::login($user);

            return redirect()->intended('/dashboard'); // Redirect to dashboard or intended page
        }

        // If authentication fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page after logging out
    }
}
