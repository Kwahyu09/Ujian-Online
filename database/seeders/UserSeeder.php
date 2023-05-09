<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '197909192003121075',
            'nama' => 'AHMAT FAHROZI, S.Pd',
            'username' => 'ahmatfahrozi23',
            'role' => 'Guru',
            'email' => 'ahmatfahrozi@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'nik' => '197909192003121987',
            'nama' => 'HILPI SUMARNI ,S.Pd.',
            'username' => 'helpisumarni23',
            'role' => 'Guru',
            'email' => 'helpisumarni@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'nik' => '6554769670212442',
            'nama' => 'Agnes Vera Nika, S.Kom',
            'username' => 'Agnes23',
            'role' => 'Admin',
            'email' => 'agnesvrn@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'nik' => '6554769670210962',
            'nama' => 'Altris Fredy, S.Kom',
            'username' => 'Altris123',
            'role' => 'Staf',
            'email' => 'altrisfredy@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'nik' => '6554769670210002',
            'nama' => 'FEBRILIA DESI RATNA SARI',
            'username' => 'febridilia132',
            'role' => 'Staf',
            'email' => 'febridilia@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
