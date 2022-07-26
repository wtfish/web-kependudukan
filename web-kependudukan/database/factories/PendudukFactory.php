<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => fake()->unique()->numberBetween(1,2000),
            'kk' => fake()->numberBetween(1,100),
            "validasi"=>fake()->randomElement(["PENGAJUAN","12-10-12","VALID"]),
            "nama" =>fake()->name(),
            'tempat_lahir' => fake()->city(),
            "tanggal_lahir"=>fake()->date(),
            "kelamin"=>fake()->numberBetween(0,1),
            "nama_ibu"=>fake()->name("female"),
            "nama_ayah"=>fake()->name("male"),
            "hubungan_id"=>mt_rand(1,11),
            "agama_id"=>mt_rand(1,7),
            "pendidikan_id"=>mt_rand(1,10),
            "status_id"=>mt_rand(1,4),
            "pekerjaan_id"=>mt_rand(1,88),
            "rt_id"=>mt_rand(1,13),
        ];
    }
}
