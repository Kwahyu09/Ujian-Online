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
            'pertanyaan' => 'Suatu informasi baru yang diinformasikan melalui koran, majalah, televisi dan alat-alat media lainnya disebut...',
            'opsi_a' => 'Gosip',
            'opsi_b' => 'Berita',
            'opsi_c' => 'Iklan',
            'opsi_d' => 'Promosi',
            'Jawaban' => 'Berita',
            'bobot' => '10',
            'grupsoal_id' =>'1'
        ]);
        Soal::create([
            'pertanyaan' => 'Syarat yang harus dipenuhi dalam penyusunan sebuah berita, kecuali...',
            'opsi_a' => 'Fiksi',
            'opsi_b' => 'Aktual',
            'opsi_c' => 'Berita',
            'opsi_d' => 'Lengkap',
            'Jawaban' => 'Fiksi',
            'bobot' => '15',
            'grupsoal_id' =>'1'
        ]);
        Soal::create([
            'pertanyaan' => 'Yang termasuk ke dalam jenis soft news adalah...',
            'opsi_a' => 'Profil atau kisah kesuksesan seseorang',
            'opsi_b' => 'Editorial',
            'opsi_c' => 'Fotografer',
            'opsi_d' => 'Pencahayaan',
            'Jawaban' => 'Profil atau kisah kesuksesan seseorang',
            'bobot' => '10',
            'grupsoal_id' =>'1'
        ]);
        Soal::create([
            'pertanyaan' => 'Di bawah ini merupakan inti teks persuasi, kecuali...',
            'opsi_a' => 'Argumentasi',
            'opsi_b' => 'Fakta',
            'opsi_c' => 'Ajakan',
            'opsi_d' => 'Penegasan kembali',
            'Jawaban' => 'Penegasan kembali',
            'bobot' => '10',
            'grupsoal_id' =>'2'
        ]);
        Soal::create([
            'pertanyaan' => 'Dalam struktur cerita narasi, pengenalan nama tokoh, latar dan konflik merupakan bagian...',
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
