<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKesehatan extends Model
{
    use HasFactory;

    protected $table = 'hasil_kesehatan';
    protected $primaryKey = 'id_hasil_kesehatan';

    protected $fillable = [
        'id_kunjungan',
        'berat_badan',
        'tinggi_badan',
        'tekanan_darah',
        'gula_darah',
        'kolesterol',
    ];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan');
    }
}