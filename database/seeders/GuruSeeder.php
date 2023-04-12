<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'nip' => '196210051987031000',
            'nama_guru' => 'AHMAD FAHLEFI',
            'gelar' => 'S.Pd',
            'slug' => 'ahmad-fahlefi',
            'pendidikan' => 'S1',
            'jurusan' => 'Bahasa Indonesia',
            'jenis_kelamin' => 'L',
            'email' => 'ahmadfahlefi@gmail.com',
            'password' => 'password'
        ]);
        Guru::create([
            'nip' => '197906042009031003',
            'nama_guru' => 'ACHMAD SYARIP HIDAYAT',
            'gelar' => ',ST.',
            'slug' => 'achmad-syarip-hidayat',
            'pendidikan' => 'S1',
            'jurusan' => 'Teknik Mesin',
            'jenis_kelamin' => 'L',
            'email' => 'achmadsyarip@gmail.com',
            'password' => 'password'
        ]);
        Guru::create([
            'nip' => '197909192003121075',
            'nama_guru' => 'AHMAT FAHROZI',
            'gelar' => ', S.Pd',
            'slug' => 'ahmat-fahrozi',
            'pendidikan' => 'S1',
            'jurusan' => 'Fisika',
            'jenis_kelamin' => 'L',
            'email' => 'ahmatfahrozi@gmail.com',
            'password' => 'password'
        ]);
        Guru::create([
            'nip' => '197909192003121987',
            'nama_guru' => 'HILPI SUMARNI',
            'gelar' => ',S.Pd.',
            'slug' => 'helpi-sumarni',
            'pendidikan' => 'S1',
            'jurusan' => 'Bahasa Indonesia',
            'jenis_kelamin' => 'P',
            'email' => 'helpisumarni@gmail.com',
            'password' => 'password'
        ]);
    }
}
