<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hasil_kesehatan', function (Blueprint $table) {
            $table->id('id_hasil_kesehatan');
            $table->unsignedBigInteger('id_kunjungan');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->string('tekanan_darah', 20);
            $table->string('gula_darah', 20);
            $table->string('kolesterol', 20);
            $table->timestamps();

            $table->foreign('id_kunjungan')->references('id_kunjungan')->on('kunjungan');
        });

        Schema::table('kunjungan', function (Blueprint $table) {
            $table->foreign('id_hasil_kesehatan')->references('id_hasil_kesehatan')->on('hasil_kesehatan');
        });
    }

    public function down()
    {
        Schema::table('kunjungan', function (Blueprint $table) {
            $table->dropForeign(['id_hasil_kesehatan']);
        });
        Schema::dropIfExists('hasil_kesehatan');
    }
};