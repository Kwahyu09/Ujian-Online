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
            'slug' => 'bahasa-indonesia'
        ]);
        Mapel::create([
            'nama_mapel' => 'Fisika',
            'slug' => 'fisika'
        ]);
        Mapel::create([
            'nama_mapel' => 'Olahraga',
            'slug' => 'olahraga'
        ]);
        Mapel::create([
            'nama_mapel' => 'PKN',
            'slug' => 'PKN'
        ]);
        Mapel::create([
            'nama_mapel' => 'Bahasa Inggris',
            'slug' => 'bahasa-inggris'
        ]);
        Mapel::create([
            'nama_mapel' => 'Agama',
            'slug' => 'agama'
        ]);
        Mapel::create([
            'nama_mapel' => 'Kewirausahaan',
            'slug' => 'kewirausahaan'
        ]);
        Mapel::create([
            'nama_mapel' => 'Matematika',
            'slug' => 'matematika'
        ]);
    }
}
