<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lansia', function (Blueprint $table) {
            $table->id('id_lansia');
            $table->unsignedBigInteger('id_tenaga_kesehatan');
            $table->unsignedBigInteger('id_akun');
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat', 100);
            $table->string('alergi_obat', 255)->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->string('vaksin', 100)->nullable();
            $table->string('no_telpon', 20);
            $table->date('tanggal_jadwal');
            $table->text('diagnosa');
            $table->text('obat_yang_diberikan');
            $table->timestamps();

            $table->foreign('id_tenaga_kesehatan')->references('id_tenaga_kesehatan')->on('tenaga_kesehatan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lansia');
    }
};