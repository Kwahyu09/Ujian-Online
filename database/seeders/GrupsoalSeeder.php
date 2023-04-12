<?php

namespace Database\Seeders;

use App\Models\Grupsoal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupsoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Grupsoal::create([
            'nama_grup' => 'Ulangan Harian Fisika',
            'slug' => 'ulangan-harian-fisika',
            'mapel_id' => '2'
        ]);
         Grupsoal::create([
            'nama_grup' => 'Ujian Tengah Semester Fisika',
            'slug' => 'ujian-tengah-semester-fisika',
            'mapel_id' =>'2'
        ]);
         Grupsoal::create([
            'nama_grup' => 'Ujian Akhir Semester Fisika',
            'slug' => 'ujian-akhir-semester-fisika',
            'mapel_id' =>'2'
        ]);
         Grupsoal::create([
            'nama_grup' => 'Ulangan Harian Bahasa Indonesia',
            'slug' => 'ulangan-harian-bahasa-indonesia',
            'mapel_id' =>'1'
        ]);
         Grupsoal::create([
            'nama_grup' => 'Ujian Tengah Semester Bahasa Indonesia',
            'slug' => 'ujian-tengah-semester-bahasa-indonesia',
            'mapel_id' =>'1'
        ]);
         Grupsoal::create([
            'nama_grup' => 'Ujian Akhir Semester Bahasa Indonesia',
            'slug' => 'ujian-akhir-semester-bahasa-indonesia',
            'mapel_id' =>'1'
        ]);
    }
}
