<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected $table = 'rumah_sakit';
    protected $primaryKey = 'id_rumah_sakit';

    protected $fillable = [
        'nama_rumah_sakit',
        'alamat_rumah_sakit',
        'no_telpon',
    ];

    public function rujukan()
    {
        return $this->hasMany(Rujukan::class, 'id_rumah_sakit');
    }
}