<?php

namespace App\Http\Controllers;

use App\Models\agama;
use App\Models\hubungan_keluarga;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\Penduduk;
use App\Models\rt;
use App\Models\status_perkawinan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(){
        return view(
            'data_penduduk',[
                "title"=>"Data Penduduk",
                "penduduks"=>Penduduk::with(["rt","rt.rw","rt.rw.dusun"])
            ]);
    }
    public function tampilTambah(){
        return view(
            'tambah',[
                "title"=>"Tambah Penduduk",
                "hubungan"=>hubungan_keluarga::all(),
                "agama"=>agama::all(),
                "pendidikan"=>pendidikan::all(),
                "status"=>status_perkawinan::all(),
                "pekerjaan"=>pekerjaan::all(),
                "rt"=>rt::all(),
            ]);
    }
    public function tambah(Request $request){
        $validatedData=$request->validate([
            "nik"=>"required|unique:penduduks,nik",
            "nama"=>"required",
            "ttl-tempat"=>"required",
            "ttl-waktu"=>"required",

        ]);
        // return view(
        //     'tambah',[
        //         "title"=>"Data Penduduk",
        //     ]);

        dd($validatedData);
    }
}
