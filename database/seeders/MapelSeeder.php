<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            'nama_mapel' => 'Bahasa Indonesia',
            'slug' => 'bahasa-indonesia',
            'user_id' =>1
        ]);
        Mapel::create([
            'nama_mapel' => 'Fisika',
            'slug' => 'fisika',
            'user_id' =>1
        ]);
        Mapel::create([
            'nama_mapel' => 'Olahraga',
            'slug' => 'olahraga',
            'user_id' =>1
        ]);
        Mapel::create([
            'nama_mapel' => 'PKN',
            'slug' => 'PKN',
            'user_id' =>1
        ]);
        Mapel::create([
            'nama_mapel' => 'Bahasa Inggris',
            'slug' => 'bahasa-inggris',
            'user_id' =>2
        ]);
        Mapel::create([
            'nama_mapel' => 'Agama',
            'slug' => 'agama',
            'user_id' =>2
        ]);
        Mapel::create([
            'nama_mapel' => 'Kewirausahaan',
            'slug' => 'kewirausahaan',
            'user_id' =>2
        ]);
        Mapel::create([
            'nama_mapel' => 'Matematika',
            'slug' => 'matematika',
            'user_id' =>2
        ]);
    }
}
