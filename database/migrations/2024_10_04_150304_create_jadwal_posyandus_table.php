<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jadwal_posyandu', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->unsignedBigInteger('id_tenaga_kesehatan');
            $table->date('tanggal_jadwal');
            $table->timestamps();

            $table->foreign('id_tenaga_kesehatan')->references('id_tenaga_kesehatan')->on('tenaga_kesehatan');
        });

        Schema::table('tenaga_kesehatan', function (Blueprint $table) {
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal_posyandu');
        });
    }

    public function down()
    {
        Schema::table('tenaga_kesehatan', function (Blueprint $table) {
            $table->dropForeign(['id_jadwal']);
        });
        Schema::dropIfExists('jadwal_posyandu');
    }
};