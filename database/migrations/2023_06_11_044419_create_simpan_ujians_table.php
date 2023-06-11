<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpan_ujians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_id');
            $table->foreignId('ujian_id');
            $table->string('nik_siswa');
            $table->string('nama_siswa');
            $table->string('jawaban');
            $table->string('skor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simpan_ujians');
    }
};
