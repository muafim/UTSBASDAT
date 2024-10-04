<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPosyandu extends Model
{
    use HasFactory;

    protected $table = 'jadwal_posyandu';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'id_tenaga_kesehatan',
        'tanggal_jadwal',
    ];

    public function tenagaKesehatan()
    {
        return $this->hasOne(TenagaKesehatan::class, 'id_tenaga_kesehatan');
    }

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'id_jadwal');
    }
}