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
        Schema::create('hasilujians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ujian_id');
            $table->string('nama_siswa', 50);
            $table->string('nik_siswa', 16);
            $table->string('nilai', 3);
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
        Schema::dropIfExists('hasilujians');
    }
};
