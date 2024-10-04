<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pendaftaran_akun'; // Nama tabel di database
    protected $primaryKey = 'id_akun'; // Primary key dari tabel

    protected $fillable = [
        'nik',            // NIK harus ditambahkan ke fillable
        'nama',
        'email',
        'no_telpon',
        'password_akun',
        'nama_akun',
        'tanggal_lahir',   // Tambahkan tanggal lahir ke fillable
        'jenis_kelamin',   // Tambahkan jenis kelamin ke fillable
        'alamat',          // Tambahkan alamat ke fillable
    ];

    protected $hidden = [
        'password_akun', // Hidden untuk menyembunyikan kolom password
    ];

    // Relasi dengan model Lansia (foreign key: id_akun)
    public function lansia()
    {
        return $this->hasOne(Lansia::class, 'id_akun');
    }
}
