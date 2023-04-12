<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama_kelas' => 'X',
            'tahun' => '2023',
            'jurusan' => 'Nautika Kapal Penangkap Ikan',
            'singkat_jur' => 'NKPI',
            'slug' => 'X-2023-NKPI'
        ]);
        Kelas::create([
            'nama_kelas' => 'XI',
            'tahun' => '2023',
            'jurusan' => 'Nautika Kapal Penangkap Ikan',
            'singkat_jur' => 'NKPI',
            'slug' => 'XI-2023-NKPI'
        ]);
        Kelas::create([
            'nama_kelas' => 'XII',
            'tahun' => '2023',
            'jurusan' => 'Nautika Kapal Penangkap Ikan',
            'singkat_jur' => 'NKPI',
            'slug' => 'XII-2023-NKPI'
        ]);
        Kelas::create([
            'nama_kelas' => 'X',
            'tahun' => '2023',
            'jurusan' => 'Teknik Kapal Penangkap Ikan',
            'singkat_jur' => 'TKPI',
            'slug' => 'X-2023-TKPI'
        ]);
        Kelas::create([
            'nama_kelas' => 'XI',
            'tahun' => '2023',
            'jurusan' => 'Teknik Kapal Penangkap Ikan',
            'singkat_jur' => 'TKPI',
            'slug' => 'XI-2023-TKPI'
        ]);
        Kelas::create([
            'nama_kelas' => 'XII',
            'tahun' => '2023',
            'jurusan' => 'Teknik Kapal Penangkap Ikan',
            'singkat_jur' => 'TKPI',
            'slug' => 'XII-2023-TKPI'
        ]);
        Kelas::create([
            'nama_kelas' => 'X',
            'tahun' => '2023',
            'jurusan' => 'Agribisnis Pengolahan Hasil Perikanan',
            'singkat_jur' => 'APHPi',
            'slug' => 'X-2023-APHPi'
        ]);
        Kelas::create([
            'nama_kelas' => 'XI',
            'tahun' => '2023',
            'jurusan' => 'Agribisnis Pengolahan Hasil Perikanan',
            'singkat_jur' => 'APHPi',
            'slug' => 'XI-2023-APHPi'
        ]);
        Kelas::create([
            'nama_kelas' => 'XII',
            'tahun' => '2023',
            'jurusan' => 'Agribisnis Pengolahan Hasil Perikanan',
            'singkat_jur' => 'APHPi',
            'slug' => 'XII-2023-APHPi'
        ]);
        Kelas::create([
            'nama_kelas' => 'X',
            'tahun' => '2023',
            'jurusan' => 'Pengembangan Perangkat Lunak dan Gin',
            'singkat_jur' => 'PPLG',
            'slug' => 'X-2023-PPLG'
        ]);
        Kelas::create([
            'nama_kelas' => 'XI',
            'tahun' => '2023',
            'jurusan' => 'Pengembangan Perangkat Lunak dan Gin',
            'singkat_jur' => 'PPLG',
            'slug' => 'XI-2023-PPLG'
        ]);
        Kelas::create([
            'nama_kelas' => 'XII',
            'tahun' => '2023',
            'jurusan' => 'Pengembangan Perangkat Lunak dan Gin',
            'singkat_jur' => 'PPLG',
            'slug' => 'XII-2023-PPLG'
        ]);
    }
}
