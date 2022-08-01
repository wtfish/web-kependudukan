<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string("kk",20)->nullable();
            $table->string("validasi",50)->nullable();
            $table->string("nik",20)->nullable();
            $table->string("nama",70)->nullable();
            $table->string("tempat_lahir")->nullable();
            $table->date("tanggal_lahir")->nullable();
            $table->string("hubungan_keluarga")->nullable();
            $table->string("status_perkawinan")->nullable();
            $table->string("pendidikan")->nullable();
            $table->string("kelamin",2)->nullable();
            $table->string("agama")->nullable();
            $table->string("pekerjaan")->nullable();
            $table->string("nama_ibu")->nullable();
            $table->string("nama_ayah")->nullable();
            $table->string("kemiskinan",50)->nullable();
            $table->foreignId("rt_id")->nullable();

            $table->date("tanggal_nikah")->nullable();
            $table->string("nomor_buku_nikah")->nullable();
            $table->string("kua",50)->nullable();

            $table->string("akte_kelahiran")->nullable();

            $table->date("tanggal_kematian")->nullable();
            $table->time("waktu_kematian")->nullable();
            $table->string("keterangan_kematian")->nullable();

            $table->string("nomor_bpjs")->nullable();

            $table->string("jabatan")->nullable();

            $table->string("telepon")->nullable();

            $table->string("nomor_ijazah")->nullable();

            $table->string("nik_ibu")->nullable();
            $table->string("nik_ayah")->nullable();

            $table->string("tanggal_cerai")->nullable();
            $table->string("nomor_akta_cerai")->nullable();

            $table->string("golongan_darah")->nullable();
            
            $table->string("penyandang_cacat")->nullable();


            $table->string("status_penduduk_baru",10)->nullable();
            //fk
            // $table->foreignId("hubungan_id")->nullable();
            // $table->foreignId("agama_id")->nullable();
            // $table->foreignId("pendidikan_id")->nullable();
            // $table->foreignId("status_id")->nullable();
            // $table->foreignId("pekerjaan_id")->nullable();
            // $table->foreignId("rt_id")->nullable();
            // $table->foreign("hubungan_id")->references("id")->on("hubungan_keluargas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
};
