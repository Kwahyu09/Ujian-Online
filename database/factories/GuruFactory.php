<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->nik(),
            'nama_guru' => $this->faker->name('male'),
            'gelar' => $this->faker->title('male'),
            'slug' => $this->faker->slug(),
            'pendidikan' => $this->faker->sentence(mt_rand(1,1)),
            'jurusan' => $this->faker->sentence(mt_rand(1,1)),
            'jenis_kelamin' => $this->faker->sentence(mt_rand(1,1)),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password
        ];
    }
}
