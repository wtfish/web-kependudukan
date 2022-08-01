<?php

namespace App\Http\Controllers;

use App\Imports\PendudukImport;
use App\Models\agama;
use App\Models\hubungan_keluarga;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\Penduduk;
use App\Models\rt;
use App\Models\status_perkawinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{
    public function index()
    {
        // dd(Penduduk::);
        return view(
            'data_penduduk',
            [
                "title" => "Data Penduduk",
                // "penduduks"=>Penduduk::all()
                "penduduks" => Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->paginate(15)
            ]
        );
    }
    public function tampilTambah()
    {
        return view(
            'tambah',
            [
                "title" => "Tambah Penduduk",
                "hubungan" => hubungan_keluarga::all(),
                "agama" => agama::all(),
                "pendidikan" => pendidikan::all(),
                "status" => status_perkawinan::all(),
                "pekerjaan" => pekerjaan::all(),
                "rt" => rt::all(),
            ]
        );
    }
    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            "nik" => "required|unique:penduduks,nik",
            "kk" => "required",
            "nama" => "required",
            "validasi" => "required",
            "ttl-tempat" => "required",
            "ttl-waktu" => "required",
            "kelamin" => "required",
            "nama_ayah" => "required",
            "nama_ibu" => 'required',
            "rt" => "required",
            "agama" => "required",
            "pendidikan" => "required",
            "pekerjaan" => "required",
            "hubungan_keluarga" => "required",
            "status_perkawinan" => "required",
            "status_penduduk_baru" => "required",
        ]);

        Penduduk::create([
            "nik" => $validatedData["nik"],
            "kk" => $validatedData["kk"],
            "nama" => $validatedData["nama"],
            "validasi" => $validatedData["validasi"],
            "tempat_lahir" => $validatedData["ttl-tempat"],
            "tanggal_lahir" => $validatedData["ttl-waktu"],
            "kelamin" => $validatedData["kelamin"],
            "nama_ibu" => $validatedData["nama_ibu"],
            "nama_ayah" => $validatedData["nama_ayah"],
            "rt_id" => $validatedData["rt"],
            "agama" => $validatedData["agama"],
            "status_penduduk_baru" => $validatedData["status_penduduk_baru"],
            "pendidikan" => $validatedData["pendidikan"],
            "pekerjaan" => $validatedData["pekerjaan"],
            "hubungan_keluarga" => $validatedData["hubungan_keluarga"],
            "status_perkawinan" => $validatedData["status_perkawinan"],
            "akte_kelahiran" => $request["akte_kelahiran"],
            "tanggal_nikah" => $request["tanggal_nikah"],
            "nomor_buku_nikah" => $request["no_buku_nikah"],
            "kua" => $request["kua"],
            "tanggal_kematian" => $request["tanggal_kematian"],
            "waktu_kematian" => $request["waktu_kematian"],
            "keterangan_kematian"=>(($request["tanggal_kematian"] != null) ? ($validatedData["kelamin"]!=null ? ($validatedData["kelamin"]=="L" ? "MDL" : "MDP" ) : "MD" ) : null),
            "kemiskinan" => $request["kemiskinan"]
        ]);
        return redirect()->route("penduduk");

        // dd($validatedData,$request);
    }

    public function show(Penduduk $penduduk)
    {
        return view("detail", [
            "title" => "Detail Penduduk",
            "penduduk" => $penduduk
        ]);
    }

    public function tampilEdit(Penduduk $penduduk)
    {
        return view("edit_penduduk", [
            "penduduk" => $penduduk,
            "title" => "Edit Penduduk",
            "hubungan_keluarga" => hubungan_keluarga::all(),
            "agama" => agama::all(),
            "pendidikan" => pendidikan::all(),
            "status" => status_perkawinan::all(),
            "pekerjaan" => pekerjaan::all(),
            "rt" => rt::all()
        ]);
    }
    public function edit(Penduduk $penduduk,Request $request){
        $validatedData = $request->validate([
            "nik" => ["required",Rule::unique("penduduks","nik")->ignore($penduduk->id)],
            "kk" => "required",
            "nama" => "required",
            "validasi" => "required",
            "ttl-tempat" => "required",
            "ttl-waktu" => "required",
            "kelamin" => "required",
            "nama_ayah" => "required",
            "nama_ibu" => 'required',
            "rt" => "required",
            "agama" => "required",
            "pendidikan" => "required",
            "pekerjaan" => "required",
            "hubungan_keluarga" => "required",
            "status_perkawinan" => "required",
            "status_penduduk_baru" => "required",
        ]);

        Penduduk::where("id",$penduduk->id)->update([
            "nik" => $validatedData["nik"],
            "kk" => $validatedData["kk"],
            "nama" => $validatedData["nama"],
            "validasi" => $validatedData["validasi"],
            "tempat_lahir" => $validatedData["ttl-tempat"],
            "tanggal_lahir" => $validatedData["ttl-waktu"],
            "kelamin" => $validatedData["kelamin"],
            "nama_ibu" => $validatedData["nama_ibu"],
            "nama_ayah" => $validatedData["nama_ayah"],
            "rt_id" => $validatedData["rt"],
            "agama" => $validatedData["agama"],
            "status_penduduk_baru" => $validatedData["status_penduduk_baru"],
            "pendidikan" => $validatedData["pendidikan"],
            "pekerjaan" => $validatedData["pekerjaan"],
            "hubungan_keluarga" => $validatedData["hubungan_keluarga"],
            "status_perkawinan" => $validatedData["status_perkawinan"],
            "akte_kelahiran" => $request["akte_kelahiran"],
            "tanggal_nikah" => $request["tanggal_nikah"],
            "nomor_buku_nikah" => $request["no_buku_nikah"],
            "kua" => $request["kua"],
            "tanggal_kematian" => $request["tanggal_kematian"],
            "waktu_kematian" => $request["waktu_kematian"],
            "keterangan_kematian" => (($request["tanggal_kematian"] != null) ? ($validatedData["kelamin"]!=null ? ($validatedData["kelamin"]=="L" ? "MDL" : "MDP" ) : "MD" ) : null),
            "kemiskinan" => $request["kemiskinan"]
        ]);
         return redirect()->route("penduduk");
    }
    public function keluar(Penduduk $penduduk){
        Penduduk::where("id",$penduduk->id)->update([
            "status_penduduk_baru"=>"Keluar"
        ]);
        return redirect()->route("penduduk");
    }
    public function tampilKeluar(){
        // dd( Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereIn("status_penduduk_baru",["Keluar"])->get());
        return view("keluar",[
            "title"=>"Penduduk Keluar",
            "penduduks"=>Penduduk::where("status_penduduk_baru","Keluar")->get()
        ]);
        
    }
    public function tampilKematian(){
        // dd(Penduduk::where('tanggal_kematian', '<>',"")->orWhere('keterangan_kematian', '<>',"")->get());
        return view('kematian',[
            "title"=>"Penduduk Meninggal",
            "penduduks"=>Penduduk::whereNotNull('tanggal_kematian')->get()
        ]);
    }

    public function tampilPindah(){
        // dd(Penduduk::where('tanggal_kematian', '<>',"")->orWhere('keterangan_kematian', '<>',"")->get());
        return view('pindah',[
            "title"=>"Penduduk Pindah",
            "penduduks"=>Penduduk::where("status_penduduk_baru","Pindah")->get()
        ]);
    }
    public function undoKematian(Penduduk $penduduk){
        $penduduk->tanggal_kematian=null;
        $penduduk->waktu_kematian=null;

        $penduduk->save();
        return redirect()->route("penduduk");
    }
    public function importPenduduk(Request $request){
        Excel::import(new PendudukImport,$request->file("data_penduduk"));
        return back();
    }
}
