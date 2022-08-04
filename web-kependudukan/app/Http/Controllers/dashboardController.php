<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request){
        if ($request->query('rt')!=null) {
            $penduduk=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->get()->count();
            $kepala_keluarga=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("hubungan_keluarga","KEPALA KELUARGA")->get()->count();
            $laki=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("kelamin","L")->get()->count();
            $perempuan=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("kelamin","P")->get()->count();
            return $laki+$perempuan;
            return $penduduk;
        }
    }
}
