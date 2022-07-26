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
use Illuminate\Support\Facades\Redirect;

class PendudukController extends Controller
{
    public function index(){
        return view(
            'data_penduduk',[
                "title"=>"Data Penduduk",
                "penduduks"=>Penduduk::with(["rt","rt.rw","rt.rw.dusun"])->get()
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
            "kk"=>"required",
            "nama"=>"required",
            "validasi"=>"required",
            "ttl-tempat"=>"required",
            "ttl-waktu"=>"required",
            "kelamin"=>"required",
            "nama_ayah"=>"required",
            "nama_ibu"=>'required',
            "rt"=>"required",
            "agama"=>"required",
            "pendidikan"=>"required",
            "pekerjaan"=>"required",
            "hubungan_keluarga"=>"required",
            "status_perkawinan"=>"required",
            "status_penduduk_baru"=>"required",
        ]);
        Penduduk::create([
            "nik"=>$validatedData["nik"],
            "kk"=>$validatedData["kk"],
            "nama"=>$validatedData["nama"],
            "validasi"=>$validatedData["validasi"],
            "tempat_lahir"=>$validatedData["ttl-tempat"],
            "tanggal_lahir"=>$validatedData["ttl-waktu"],
            "kelamin"=>$validatedData["kelamin"],
            "nama_ibu"=>$validatedData["nama_ibu"],
            "nama_ayah"=>$validatedData["nama_ayah"],
            "rt_id"=>$validatedData["rt"],
            "agama_id"=>$validatedData["agama"],
            "status_penduduk_baru"=>$validatedData["status_penduduk_baru"],
            "pendidikan_id"=>$validatedData["pendidikan"],
            "pekerjaan_id"=>$validatedData["pekerjaan"],
            "hubungan_id"=>$validatedData["hubungan_keluarga"],
            "status_id"=>$validatedData["status_perkawinan"],
            "akte_kelahiran"=>$request["akte_kelahiran"],
            "tanggal_nikah"=>$request["tanggal_nikah"],
            "nomor_buku_nikah"=>$request["no_buku_nikah"],
            "kua"=>$request["kua"],
            "tanggal_kematian"=>$request["tanggal_kematian"],
            "keterangan_kematian"=>$request["keterangan_kematian"],
            "kemiskinan"=>$request["kemiskinan"]

        ]);
        return view(
            'data_penduduk',[
                "title"=>"Data Penduduk",
                "penduduks"=>Penduduk::all()
            ]);

        // dd($validatedData,$request);
    }

    public function show(Penduduk $penduduk){
       return view("detail",[
        "title"=>"Detail Penduduk",
        "penduduk"=>$penduduk
       ]);
    }
}
