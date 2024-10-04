<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenaga_kesehatan', function (Blueprint $table) {
            $table->id('id_tenaga_kesehatan');
            $table->unsignedBigInteger('id_jadwal');
            $table->string('nama_lengkap', 100);
            $table->string('alamat', 100);
            $table->string('no_telpon', 20);
            $table->string('email', 100);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenaga_kesehatan');
    }
};