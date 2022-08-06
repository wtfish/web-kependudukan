<?php

namespace App\Http\Controllers;

use App\Models\dusun;
use App\Models\Penduduk;
use App\Models\rt;
use App\Models\rw;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request){
        if ($request->query('rt')==null && $request->query('rw')==null && $request->query('dusun')==null) {
            $penduduk=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->get()->count();
            $kepala_keluarga=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("hubungan_keluarga","KEPALA KELUARGA")->get()->count();
            $laki=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("kelamin","L")->get()->count();
            $perempuan=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("kelamin","P")->get()->count();
            $meninggal=Penduduk::whereNotNull('tanggal_kematian')->get()->count();
            $lahir=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("status_penduduk_baru","Baru")->get()->count();
            //
            $tamatsd=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","TAMAT SD/SEDERAJAT")->get()->count();
            $sltp=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","SLTP/SEDERAJAT")->get()->count();
            $slta=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","SLTA/SEDERAJAT")->get()->count();
            $d12=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","DIPLOMA I/II")->get()->count();
            $d3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","AKADEMI/DIPLOMA III/SARJANA MUDA")->get()->count();
            $s1=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","DIPLOMA IV/STRATA I/STRATA II")->get()->count();
            $s2=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","STRATA III")->get()->count();
            $s3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("pendidikan","LAINNYA")->get()->count();
            return view("dashboard",[
                "title"=>"Dashboard",
                "penduduk"=>$penduduk,
                "kepala_keluarga"=>$kepala_keluarga,
                "laki"=>$laki,
                "perempuan"=>$perempuan,
                "meninggal"=>$meninggal,
                "tamatsd"=>$tamatsd,
                "lahir"=> $lahir,
                "sltp"=>$sltp,
                "slta"=>$slta,
                "d12"=>$d12,
                "d3"=>$d3,
                "s1"=>$s1,
                "s2"=>$s2,
                "s3"=>$s3,
                "rts"=>rt::all(),
                "rws"=>rw::all(),
                "dusuns"=>dusun::all(),
            ]);
        }
        else if ($request->query('rt')!=null) {
            $penduduk=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->get()->count();
            $kepala_keluarga=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("hubungan_keluarga","KEPALA KELUARGA")->get()->count();
            $laki=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("kelamin","L")->get()->count();
            $perempuan=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("kelamin","P")->get()->count();
            $meninggal=Penduduk::where("rt_id",$request->query('rt'))->whereNotNull('tanggal_kematian')->get()->count();
            $lahir=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("status_penduduk_baru","Baru")->get()->count();
            //
            $tamatsd=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","TAMAT SD/SEDERAJAT")->get()->count();
            $sltp=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","SLTP/SEDERAJAT")->get()->count();
            $slta=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","SLTA/SEDERAJAT")->get()->count();
            $d12=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","DIPLOMA I/II")->get()->count();
            $d3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","AKADEMI/DIPLOMA III/SARJANA MUDA")->get()->count();
            $s1=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","DIPLOMA IV/STRATA I/STRATA II")->get()->count();
            $s2=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","STRATA III")->get()->count();
            $s3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("rt_id",$request->query('rt'))->where("pendidikan","LAINNYA")->get()->count();
            return view("dashboard",[
                "title"=>"Dashboard",
                "penduduk"=>$penduduk,
                "kepala_keluarga"=>$kepala_keluarga,
                "laki"=>$laki,
                "perempuan"=>$perempuan,
                "meninggal"=>$meninggal,
                "tamatsd"=>$tamatsd,
                "lahir"=>$lahir,
                "sltp"=>$sltp,
                "slta"=>$slta,
                "d12"=>$d12,
                "d3"=>$d3,
                "s1"=>$s1,
                "s2"=>$s2,
                "s3"=>$s3,
                "rts"=>rt::all(),
                "rws"=>rw::all(),
                "dusuns"=>dusun::all(),
            ]);
        }
        else if ($request->query('rw')!=null) {
            //cari rt
            $rw=rw::find($request->query('rw'));
            $daftarRt=$rw->rt()->get("id");

            //data
            $penduduk=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->get()->count();
            $kepala_keluarga=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("hubungan_keluarga","KEPALA KELUARGA")->get()->count();
            $laki=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("kelamin","L")->get()->count();
            $perempuan=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("kelamin","P")->get()->count();
            $meninggal=Penduduk::whereIn("rt_id",$daftarRt)->whereNotNull('tanggal_kematian')->get()->count();
            $lahir=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("status_penduduk_baru","Baru")->get()->count();
            //
            $tamatsd=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","TAMAT SD/SEDERAJAT")->get()->count();
            $sltp=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","SLTP/SEDERAJAT")->get()->count();
            $slta=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","SLTA/SEDERAJAT")->get()->count();
            $d12=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","DIPLOMA I/II")->get()->count();
            $d3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","AKADEMI/DIPLOMA III/SARJANA MUDA")->get()->count();
            $s1=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","DIPLOMA IV/STRATA I/STRATA II")->get()->count();
            $s2=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","STRATA III")->get()->count();
            $s3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","LAINNYA")->get()->count();
            return view("dashboard",[
                "title"=>"Dashboard",
                "penduduk"=>$penduduk,
                "kepala_keluarga"=>$kepala_keluarga,
                "laki"=>$laki,
                "perempuan"=>$perempuan,
                "meninggal"=>$meninggal,
                "tamatsd"=>$tamatsd,
                "lahir"=>$lahir,
                "sltp"=>$sltp,
                "slta"=>$slta,
                "d12"=>$d12,
                "d3"=>$d3,
                "s1"=>$s1,
                "s2"=>$s2,
                "s3"=>$s3,
                "rts"=>rt::all(),
                "rws"=>rw::all(),
                "dusuns"=>dusun::all(),
            ]);
        }
        else if ($request->query('dusun')!=null) {
            //cari rt
            $dusun=dusun::find($request->query('dusun'));
            $daftarRw=$dusun->rw()->get("id");
            $daftarRt=[];
            $tmps=[];
            // return dd($daftarRw[0]["id"]);
            foreach ($daftarRw as $rw) {
                $found=rw::find($rw["id"]);
                $tmps=$found->rt()->get("id");
                foreach ($tmps as $tmp) {
                    $daftarRt[]=$tmp["id"];
                }
                
            }
            
            // return $daftarRt;

            $penduduk=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->get()->count();
            $kepala_keluarga=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("hubungan_keluarga","KEPALA KELUARGA")->get()->count();
            $laki=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("kelamin","L")->get()->count();
            $perempuan=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("kelamin","P")->get()->count();
            $meninggal=Penduduk::whereIn("rt_id",$daftarRt)->whereNotNull('tanggal_kematian')->get()->count();
            $lahir=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("status_penduduk_baru","Baru")->get()->count();
            //
            $tamatsd=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","TAMAT SD/SEDERAJAT")->get()->count();
            $sltp=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","SLTP/SEDERAJAT")->get()->count();
            $slta=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","SLTA/SEDERAJAT")->get()->count();
            $d12=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","DIPLOMA I/II")->get()->count();
            $d3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","AKADEMI/DIPLOMA III/SARJANA MUDA")->get()->count();
            $s1=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","DIPLOMA IV/STRATA I/STRATA II")->get()->count();
            $s2=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","STRATA III")->get()->count();
            $s3=Penduduk::whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->whereIn("rt_id",$daftarRt)->where("pendidikan","LAINNYA")->get()->count();
            return view("dashboard",[
                "title"=>"Dashboard",
                "penduduk"=>$penduduk,
                "kepala_keluarga"=>$kepala_keluarga,
                "laki"=>$laki,
                "perempuan"=>$perempuan,
                "meninggal"=>$meninggal,
                "tamatsd"=>$tamatsd,
                "lahir"=>$lahir,
                "sltp"=>$sltp,
                "slta"=>$slta,
                "d12"=>$d12,
                "d3"=>$d3,
                "s1"=>$s1,
                "s2"=>$s2,
                "s3"=>$s3,
                "rts"=>rt::all(),
                "rws"=>rw::all(),
                "dusuns"=>dusun::all(),
            ]);
        }
    }
}
