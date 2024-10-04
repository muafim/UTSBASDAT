<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    use HasFactory;

    protected $table = 'lansia';
    protected $primaryKey = 'id_lansia';

    protected $fillable = [
        'id_tenaga_kesehatan',
        'id_akun',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'alergi_obat',
        'riwayat_penyakit',
        'vaksin',
        'no_telpon',
        'tanggal_jadwal',
        'diagnosa',
        'obat_yang_diberikan',
    ];

    public function tenagaKesehatan()
    {
        return $this->belongsTo(TenagaKesehatan::class, 'id_tenaga_kesehatan');
    }

    public function akun()
    {
        return $this->belongsTo(User::class, 'id_akun');
    }
    

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'id_lansia');
    }
}