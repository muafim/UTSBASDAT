<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user; // Pastikan menggunakan model User
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat pengguna admin
        user::create([
            'nama' => 'Admin',
            'email' => 'admin@admin.com',
            'password_akun' => Hash::make('abc123'), // Hash password
            'role' => 'nakes', // Role sebagai admin
        ]);
    }
}
