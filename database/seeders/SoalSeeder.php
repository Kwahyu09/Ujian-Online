<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soal::create([
            'kd_soal' => 'BI9862',
            'pertanyaan' => 'Suatu informasi baru yang diinformasikan melalui koran, majalah, televisi dan alat-alat media lainnya disebut...',
            'slug' => 'BI9862',
            'gambar' => '',
            'opsi_a' => 'Gosip',
            'opsi_b' => 'Berita',
            'opsi_c' => 'Iklan',
            'opsi_d' => 'Promosi',
            'Jawaban' => 'Berita',
            'bobot' => '10',
            'grupsoal_id' =>'1'
        ]);
        Soal::create([
            'kd_soal' => 'BI9752',
            'pertanyaan' => 'Syarat yang harus dipenuhi dalam penyusunan sebuah berita, kecuali...',
            'slug' => 'BI9752',
            'gambar' => '',
            'opsi_a' => 'Fiksi',
            'opsi_b' => 'Aktual',
            'opsi_c' => 'Berita',
            'opsi_d' => 'Lengkap',
            'Jawaban' => 'Fiksi',
            'bobot' => '15',
            'grupsoal_id' =>'1'
        ]);
        Soal::create([
            'kd_soal' => 'BI2613',
            'pertanyaan' => 'Yang termasuk ke dalam jenis soft news adalah...',
            'slug' => 'BI2613',
            'gambar' => '',
            'opsi_a' => 'Profil atau kisah kesuksesan seseorang',
            'opsi_b' => 'Editorial',
            'opsi_c' => 'Fotografer',
            'opsi_d' => 'Pencahayaan',
            'Jawaban' => 'Profil atau kisah kesuksesan seseorang',
            'bobot' => '10',
            'grupsoal_id' =>'1'
        ]);
        Soal::create([
            'kd_soal' => 'BIUA62',
            'pertanyaan' => 'Di bawah ini merupakan inti teks persuasi, kecuali...',
            'slug' => 'BIUA62',
            'gambar' => '',
            'opsi_a' => 'Argumentasi',
            'opsi_b' => 'Fakta',
            'opsi_c' => 'Ajakan',
            'opsi_d' => 'Penegasan kembali',
            'Jawaban' => 'Penegasan kembali',
            'bobot' => '10',
            'grupsoal_id' =>'2'
        ]);
        Soal::create([
            'kd_soal' => 'BI9436',
            'pertanyaan' => 'Dalam struktur cerita narasi, pengenalan nama tokoh, latar dan konflik merupakan bagian...',
            'slug' => 'BI9436',
            'gambar' => '',
            'opsi_a' => 'Orientasi',
            'opsi_b' => 'Komplikasi',
            'opsi_c' => 'Identifikasi',
            'opsi_d' => 'Resolusi',
            'Jawaban' => 'Orientasi',
            'bobot' => '15',
            'grupsoal_id' =>'2'
        ]);
    }
}
