<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rujukan', function (Blueprint $table) {
            $table->id('id_rujukan');
            $table->unsignedBigInteger('id_rumah_sakit');
            $table->unsignedBigInteger('id_kunjungan');
            $table->string('status_rujukan', 100);
            $table->timestamps();

            $table->foreign('id_rumah_sakit')->references('id_rumah_sakit')->on('rumah_sakit');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rujukan');
    }
};