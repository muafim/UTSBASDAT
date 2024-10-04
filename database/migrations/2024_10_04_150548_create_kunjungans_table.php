<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id('id_kunjungan');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_hasil_kesehatan');
            $table->date('tanggal_kunjungan');
            $table->unsignedBigInteger('id_lansia');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal_posyandu');
            $table->foreign('id_lansia')->references('id_lansia')->on('lansia');
        });

        Schema::table('rujukan', function (Blueprint $table) {
            $table->foreign('id_kunjungan')->references('id_kunjungan')->on('kunjungan');
        });
    }

    public function down()
    {
        Schema::table('rujukan', function (Blueprint $table) {
            $table->dropForeign(['id_kunjungan']);
        });
        Schema::dropIfExists('kunjungan');
    }
};