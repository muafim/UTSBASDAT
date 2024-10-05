<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan menggunakan model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilWaliController extends Controller
{
    // Tampilkan profil wali yang sedang login
    public function show()
    {
        // Ambil data pengguna (wali) yang sedang login dari tabel pendaftaran_akun
        $wali = Auth::User(); // Ambil user yang sedang login

        return view('profil-wali', compact('wali')); // Tampilkan view profil wali
    }

    // Proses update profil wali
    public function update(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nik' => 'required|digits:16|unique:pendaftaran_akun,nik,' . Auth::User()->id_akun, // Pastikan NIK unik kecuali untuk wali yang sedang login
            'no_telpon' => 'required|string|max:15',
        ]);

        // Ambil data wali yang sedang login
        $wali = Auth::User();

        // Update data wali berdasarkan input dari form
        $wali->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nik' => $request->nik,
            'no_telpon' => $request->no_telpon,
        ]);

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
