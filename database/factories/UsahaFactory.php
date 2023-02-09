<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usaha>
 */
class UsahaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_usaha' => $this->faker->jobTitle(),
            'bidang_usaha' => $this->faker->jobTitle(),
            'jenis_produk' => $this->faker->word(),
            'nib_oss' => $this->faker->randomNumber(15, true),
            'no_pendataan_umkm' => $this->faker->randomNumber(15, true),
            'alamat_usaha' => $this->faker->address(),
            'kelurahan_usaha' => $this->faker->citySuffix(),
            'kecamatan_usaha' => $this->faker->country(),
            'omset' => $this->faker->randomNumber(20, true),
            'asset' => $this->faker->word(),
            'kapasitas_produksi' => $this->faker->randomNumber(2, true),
            'tenaga_kerja' => $this->faker->randomNumber(2, false),
            'cakupan_wilayah_pemasaran' => $this->faker->word(),
            'jenis_pemasaran' => $this->faker->word(),
            'izin_usaha' => $this->faker->word(),
            'permodalan_usaha' => $this->faker->word(),
            'permasalahan_usaha' => $this->faker->word(),
        ];
    }
}
 