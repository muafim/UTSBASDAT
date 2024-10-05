<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKesehatan extends Model
{
    use HasFactory;

    protected $table = 'tenaga_kesehatan';
    protected $primaryKey = 'id_tenaga_kesehatan';

    protected $fillable = [
        'id_jadwal',
        'nama_lengkap',
        'alamat',
        'no_telpon',
        'email',
        'jenis_kelamin',
        'role',
    ];

    public function jadwalPosyandu()
    {
        return $this->belongsTo(JadwalPosyandu::class, 'id_jadwal');
    }

    public function lansia()
    {
        return $this->hasMany(Lansia::class, 'id_tenaga_kesehatan');
    }
}