<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran_akun', function (Blueprint $table) {
            $table->id('id_akun'); // Primary key dan auto_increment
            $table->string('nik', 16)->nullable(); // NIK dapat dikosongkan
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('no_telpon', 20);
            $table->string('password_akun', 255);
            $table->string('nama_akun', 100);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->timestamps();
        });

        Schema::table('lansia', function (Blueprint $table) {
            $table->foreign('id_akun')->references('id_akun')->on('pendaftaran_akun'); // Foreign key tetap pada id_akun
        });
    }

    public function down()
    {
        Schema::table('lansia', function (Blueprint $table) {
            $table->dropForeign(['id_akun']);
        });
        Schema::dropIfExists('pendaftaran_akun');
    }
};
