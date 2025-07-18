<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nim' => $this->faker->unique()->numerify('22########'),
            'jurusan' => $this->faker->randomElement(['Informatika', 'Statistika', 'Biologi', 'Fisika']),
        ];
    }
}
