<?php

namespace Database\Seeders;

use App\Models\Ujian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ujian::create([
            'kd_ujian' => '928hsdo2d',
            'nama_ujian' => 'Ujian Tengah Semester',
            'slug' => 'ujian-tengah-semester',
            'mapel' => 'Fisika',
            'grup_Soal' => 'Ujian Tengah Semester',
            'kelas' => 'X-2023-NKPI',
            'tanggal' => '2023-11-04',
            'waktu_mulai' => '2023-04-11 10:14:31',
            'waktu_selesai' => '2023-04-11 14:14:31',
            'user_id' => '5'
        ]);
    }
}
