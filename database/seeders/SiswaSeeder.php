<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nik' => '19790919200312098',
            'nama' => 'Muhammad Riski',
            'username' => 'muhammad-riski',
            'alamat' => 'Padang Jati',
            'tempat_lahir' => 'Padang Jati',
            'tanggal_lahir' => '2002-11-24',
            'jenis_kel' => 'L',
            'email' => 'mriski@gmail.com',
            'password' => 'Password',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nik' => '19790919200312742',
            'nama' => 'Muhammad Ikhsan',
            'username' => 'muhammad-ikhsan',
            'alamat' => 'Panorama',
            'tempat_lahir' => 'Panorama',
            'tanggal_lahir' => '2002-01-12',
            'jenis_kel' => 'L',
            'email' => 'miksan@gmail.com',
            'password' => 'Password',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nik' => '19790919200312231',
            'nama' => 'Mawar Saputri',
            'username' => 'mawar-saputri',
            'alamat' => 'Padang Serai',
            'tempat_lahir' => 'Padang Serai',
            'tanggal_lahir' => '2003-02-12',
            'jenis_kel' => 'L',
            'email' => 'mawar@gmail.com',
            'password' => 'Password',
            'kelas_id' => '2'
        ]);
    }
}
