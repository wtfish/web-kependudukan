<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\agama;
use App\Models\dusun;
use App\Models\hubungan_keluarga;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\Penduduk;
use App\Models\rt;
use App\Models\rw;
use App\Models\status_perkawinan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Hubungan Keluarga
        hubungan_keluarga::create([
            "deskripsi" => "KEPALA KELUARGA"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "SUAMI"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "ISTRI"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "ANAK"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "MENANTU"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "CUCU"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "ORANGTUA"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "MERTUA"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "FAMILI"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "PEMBANTU"
        ]);
        hubungan_keluarga::create([
            "deskripsi" => "LAINYA"
        ]);

        //AGAMA
        agama::create([
            "deskripsi" => "ISLAM"
        ]);
        agama::create([
            "deskripsi" => "KRISTEN"
        ]);
        agama::create([
            "deskripsi" => "KATHOLIK"
        ]);
        agama::create([
            "deskripsi" => "HINDU"
        ]);
        agama::create([
            "deskripsi" => "BUDHA"
        ]);
        agama::create([
            "deskripsi" => "KONG HUCU"
        ]);
        agama::create([
            "deskripsi" => "KEPERCAYAAN"
        ]);

        //PENDIDIKAN
        pendidikan::create([
            "deskripsi" => "TIDAK/BELUM SEKOLAH"
        ]);
        pendidikan::create([
            "deskripsi" => "BELUM TAMAT SD/SEDERAJAT"
        ]);
        pendidikan::create([
            "deskripsi" => "TAMAT SD/SEDERAJAT"
        ]);
        pendidikan::create([
            "deskripsi" => "SLTP/SEDERAJAT"
        ]);
        pendidikan::create([
            "deskripsi" => "SLTA/SEDERAJAT"
        ]);
        pendidikan::create([
            "deskripsi" => "DIPLOMA I/II"
        ]);
        pendidikan::create([
            "deskripsi" => "AKADEMI/DIPLOMA III/SARJANA MUDA"
        ]);
        pendidikan::create([
            "deskripsi" => "DIPLOMA IV/STRATA I"
        ]);
        pendidikan::create([
            "deskripsi" => "STRATA II"
        ]);
        pendidikan::create([
            "deskripsi" => "STRATA III"
        ]);

        //status perkawinan
        status_perkawinan::create([
            "deskripsi" => "BELUM KAWIN"
        ]);
        status_perkawinan::create([
            "deskripsi" => "BELUM KAWIN"
        ]);
        status_perkawinan::create([
            "deskripsi" => "CERAI HIDUP"
        ]);
        status_perkawinan::create([
            "deskripsi" => "CERAI MATI"
        ]);
        //RT
        rt::create([
            "rw_id" => 1
        ]);
        rt::create([
            "rw_id" => 1
        ]);
        rt::create([
            "rw_id" => 1
        ]);
        rt::create([
            "rw_id" => 1
        ]);

        rt::create([
            "rw_id" => 2
        ]);
        rt::create([
            "rw_id" => 2
        ]);
        rt::create([
            "rw_id" => 2
        ]);

        rt::create([
            "rw_id" => 3
        ]);
        rt::create([
            "rw_id" => 3
        ]);
        rt::create([
            "rw_id" => 3
        ]);
        rt::create([
            "rw_id" => 4
        ]);
        rt::create([
            "rw_id" => 4
        ]);
        rt::create([
            "rw_id" => 4
        ]);

        for ($i = 1; $i <= 4; $i++) {
            rw::create([
                "dusun_id" => 1
            ]);
        }
        //DUSUNS
        dusun::create([
            "deskripsi" => "KRAJAN"
        ]);
        dusun::create([
            "deskripsi" => "TLEKUNG"
        ]);
        dusun::create([
            "deskripsi" => "DOKOSARI"
        ]);
        dusun::create([
            "deskripsi" => "SUMBERWANGI"
        ]);
        dusun::create([
            "deskripsi" => "SUMBERSARI"
        ]);
        dusun::create([
            "deskripsi" => "MULYOSARI"
        ]);

        //


    }
}
