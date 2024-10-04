<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    use HasFactory;

    protected $table = 'rujukan';
    protected $primaryKey = 'id_rujukan';

    protected $fillable = [
        'id_rumah_sakit',
        'id_kunjungan',
        'status_rujukan',
    ];

    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class, 'id_rumah_sakit');
    }

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan');
    }
}