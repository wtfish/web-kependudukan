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
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            "deskripsi" => "DIPLOMA IV/STRATA I/STRATA II"
        ]);
        pendidikan::create([
            "deskripsi" => "STRATA III"
        ]);
        pendidikan::create([
            "deskripsi" => "LAINNYA"
        ]);

        //status perkawinan
        status_perkawinan::create([
            "deskripsi" => "BELUM KAWIN"
        ]);
        status_perkawinan::create([
            "deskripsi" => "KAWIN TERCATAT"
        ]);
        status_perkawinan::create([
            "deskripsi" => "KAWIN BELUM TERCATAT"
        ]);
        status_perkawinan::create([
            "deskripsi" => "CERAI HIDUP TERCATAT"
        ]);
        status_perkawinan::create([
            "deskripsi" => "CERAI HIDUP BELUM TERCATAT"
        ]);
        status_perkawinan::create([
            "deskripsi" => "CERAI MATI"
        ]);
        //RT
        for ($i=1; $i <=4 ; $i++) { 
            rt::create([
                "rw_id" => 1
            ]);
        }

        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 2
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 3
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 4
            ]);
        }

        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 5
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rt::create([
                "rw_id" => 6
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 7
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rt::create([
                "rw_id" => 8
            ]);
        }
        for ($i=1; $i <= 6; $i++) { 
            rt::create([
                "rw_id" => 9
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rt::create([
                "rw_id" => 10
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 11
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 12
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 13
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 14
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 15
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 16
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rt::create([
                "rw_id" => 17
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 18
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 19
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 20
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rt::create([
                "rw_id" => 21
            ]);
        }


        // rw to dusun
        for ($i=1; $i <= 4; $i++) { 
            rw::create([
                "dusun_id" => 1
            ]);
        }
        for ($i=1; $i <= 3; $i++) { 
            rw::create([
                "dusun_id" => 2
            ]);
        }
        for ($i=1; $i <= 2; $i++) { 
            rw::create([
                "dusun_id" => 3
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rw::create([
                "dusun_id" => 4
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rw::create([
                "dusun_id" => 5
            ]);
        }
        for ($i=1; $i <= 4; $i++) { 
            rw::create([
                "dusun_id" => 6
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

        User::create([
            'name' => "desa-admin",
            'email' => "admin@admin.com",
            'password' => Hash::make("sumberPisang")
          ]);
        DB::insert("INSERT INTO pekerjaans(deskripsi) VALUES ('BELUM/TIDAK BEKERJA'), ('MENGURUS RUMAH TANGGA'), ('PELAJAR/MAHASISWA'), ('PENSIUNAN'), ('PNS'), ('TNI'), ('KEPOLISIAN RI'), ('PERDAGANGAN'), ('PETANI/PEKEBUN'), ('PETERNAK'), ('NELAYAN/PERIKANAN'), ('INDUSTRI'), ('KONTRUKSI'), ('TRANSPORTASI'), ('KARYAWAN SWASTA'), ('KARYAWAN BUMN'), ('KARYAWAN BUMD'), ('KARYAWAN HONORER'), ('BURUH HARIAN LEPAS'), ('BURUH TANI/PERKEBUNAN'), ('BURUH NELAYAN/PERIKANAN'), ('BURUH PETERNAKAN'), ('PEMBANTU RUMAH TANGGA'), ('TUKANG CUKUR'), ('TUKANG LISTRIK'), ('TUKANG BATU'), ('TUKANG KAYU'), ('TUKANG SOL SEPATU'), ('TUKANG LAS/PANDAI BESI'), ('TUKANG JAHIT'), ('TUKANG GIGI'), ('PENATA RIAS'), ('PENATA BUSANA'), ('PENATA RAMBUT'), ('MEKANIK'), ('SENIMAN'), ('TABIB'), ('PARAJI'), ('PERANCANG BUSANA'), ('PENTERJEMAH'), ('IMAM MASJID'), ('PENDETA'), ('PASTOR'), ('WARTAWAN'), ('USTADZ/MUBALIGH'), ('JURU MASAK'), ('PROMOTOR ACARA'), ('ANGGOTA DPR RI'), ('ANGGOTA DPD'), ('ANGGOTA BPK'), ('PRESIDEN'), ('WAKIL PRESIDEN'), ('AGGOTA MAHKAMAH KONSTITUSI'), ('AGGOTA KABINET/KEMENTRIAN'), ('DUTA BESAR'), ('GUBERNUR'), ('WAKIL GUBERNUR'), ('BUPATI'), ('WAKIL BUPATI'), ('WALIKOTA'), ('WAKIL WALIKOTA'), ('AGGOTA DPRD PROP'), ('AGGOTA DPRP KAB/KOTA'), ('DOSEN'), ('GURU'), ('PILOT'), ('PENGACARA'), ('NOTARIS'), ('ARSITEK'), ('AKUNTAN'), ('KONSULTAN'), ('DOKTER'), ('BIDAN'), ('PERAWAT'), ('APOTEKER'), ('PSIKIATER/PSIKOLOG'), ('PENYIAR TELEVISI'), ('PENYIAR RADIO'), ('PELAUT'), ('PENELITI'), ('SOPIR'), ('PIALANG'), ('PARANORMAL'), ('PEDAGANG'), ('PERANGKAT DESA'), ('KEPALA DESA'), ('BIARAWATI'), ('WIRASWASTA');", );

    }
}
