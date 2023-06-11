<?php

namespace Database\Seeders;

use App\Models\Hasilujian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HasilujianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hasilujian::create([
            'nama_siswa' => 'Muhammad Riski',
            'nik_siswa' => 'G1A019082',
            'nilai' => '90',
            'ujian_id' => '1'
        ]);
        Hasilujian::create([
            'nama_siswa' => 'Mawar Puspita',
            'nik_siswa' => 'G1A019023',
            'nilai' => '95',
            'ujian_id' => '1'
        ]);
    }
}
