<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profil-wali', function () {
    return view('profil wali');
});

Route::get('/profil-lansia', function () {
    return view('profil lansia');
});

Route::get('/kelola-kunjungan', function () {
    return view('kelola kunjungan');
});

Route::get('/hasil-kesehatan', function () {
    return view('hasil kesehatan');
});

Route::get('/status-rujukan', function () {
    return view('status rujukan');
});

Route::get('/tambahkan-lansia', function () {
    return view('tambahkan lansia');
});

Route::get('/registrasi-akun', function () {
    return view('registrasi akun');
});

Route::get('/dashboard-nakes', function () {
    return view('dashboard nakes');
});

Route::get('/jadwal-nakes', function () {
    return view('jadwal nakes');
});

Route::get('/input-hasil-kesehatan', function () {
    return view('input hasil kesehatan');
});
    
Route::get('/rujukan', function () {
    return view('rujukan');
});

Route::get('/data-pasien', function () {
    return view('data pasien');
});

Route::get('/detail-pasien', function () {
    return view('detail pasien');
});
Auth::routes();

Route::get('/register', [RegistrasiController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrasiController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



