<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';
    protected $primaryKey = 'id_kunjungan';

    protected $fillable = [
        'id_jadwal',
        'id_hasil_kesehatan',
        'tanggal_kunjungan',
        'id_lansia',
    ];

    public function jadwalPosyandu()
    {
        return $this->belongsTo(JadwalPosyandu::class, 'id_jadwal');
    }

    public function hasilKesehatan()
    {
        return $this->hasOne(HasilKesehatan::class, 'id_hasil_kesehatan');
    }

    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'id_lansia');
    }

    public function rujukan()
    {
        return $this->hasOne(Rujukan::class, 'id_kunjungan');
    }
}