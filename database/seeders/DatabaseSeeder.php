<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     GuruSeeder::class
        // ]);
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
        \App\Models\User::factory(10)->create();
        \App\Models\Guru::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
