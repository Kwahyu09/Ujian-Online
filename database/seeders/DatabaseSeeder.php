<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SoalSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\MapelSeeder;
use Database\Seeders\SiswaSeeder;
use Database\Seeders\UjianSeeder;
use Database\Seeders\GrupsoalSeeder;
use Database\Seeders\HasilujianSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KelasSeeder::class
        ]);
        $this->call([
            MapelSeeder::class
        ]);
        $this->call([
            SiswaSeeder::class
        ]);
        $this->call([
            GrupsoalSeeder::class
        ]);
        $this->call([
            SoalSeeder::class
        ]);
        $this->call([
            UjianSeeder::class
        ]);
        $this->call([
            HasilujianSeeder::class
        ]);
        $this->call([
            UserSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
        // \App\Models\Guru::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
