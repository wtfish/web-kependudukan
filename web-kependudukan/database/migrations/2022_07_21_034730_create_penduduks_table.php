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
            $table->string("nik",20)->unique();
            $table->string("kk",20);
            $table->string("nama",50);
            $table->string("validasi",50);
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->integer("kelamin");
            $table->string("nama_ibu");
            $table->string("nama_ayah");
            $table->string("status_penduduk_baru",10);
            

            //tidak wajib
            $table->string("kemiskinan",50)->nullable();
            $table->date("tanggal_nikah")->nullable();
            $table->string("nomor_buku_nikah")->nullable();
            $table->string("kua",50)->nullable();
            $table->string("akte_kelahiran")->nullable();
            $table->dateTime("tanggal_kematian")->nullable();
            $table->string("keterangan_kematian")->nullable();

            //fk
            $table->foreignId("hubungan_id")->nullable();
            $table->foreignId("agama_id")->nullable();
            $table->foreignId("pendidikan_id")->nullable();
            $table->foreignId("status_id")->nullable();
            $table->foreignId("pekerjaan_id")->nullable();
            $table->foreignId("rt_id")->nullable();
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
