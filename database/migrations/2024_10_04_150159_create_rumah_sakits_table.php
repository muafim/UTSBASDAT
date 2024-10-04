<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rumah_sakit', function (Blueprint $table) {
            $table->id('id_rumah_sakit');
            $table->string('nama_rumah_sakit', 100);
            $table->string('alamat_rumah_sakit', 100);
            $table->string('no_telpon', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rumah_sakit');
    }
};