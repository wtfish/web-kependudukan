<?php

namespace Database\Seeders;

use App\Models\hubungan_keluarga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HubunganKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hubungan_keluarga::create([
            "deskripsi"=>"KEPALA KELUARGA"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"SUAMI"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"ISTRI"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"ANAK"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"MENANTU"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"CUCU"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"ORANGTUA"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"MERTUA"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"FAMILI"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"PEMBANTU"
        ]);
        hubungan_keluarga::create([
            "deskripsi"=>"LAINYA"
        ]);
    }
}
