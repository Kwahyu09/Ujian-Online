<?php

namespace Database\Seeders;

use App\Models\SimpanUjian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimpanUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SimpanUjian::create([
            'nama_siswa'=> 'Ahmad Muhaimin',
            'nik_siswa'=> '139791093840384',
            'jawaban'=> 'opsi_a',
            'skor'=> '10',
            'soal_id' => '1',
            'ujian_id' => '1'
        ]);
    }
}
