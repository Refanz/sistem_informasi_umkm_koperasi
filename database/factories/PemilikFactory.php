<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemilik>
 */
class PemilikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pemilik' => $this->faker->name(),
            'alamat_pemilik' => $this->faker->address(),
            'keluarahan_pemilik' => $this->faker->secondaryAddress(),
            'kecamatan_pemilik' => $this->faker->city()


        ];
    }
}
