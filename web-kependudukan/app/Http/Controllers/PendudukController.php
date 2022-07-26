<?php

namespace App\Http\Controllers;

use App\Exports\UserActiveExport;
use App\Exports\UserAllExport;
use App\Exports\UserKeluarExport;
use App\Exports\UserMeninggalExport;
use App\Exports\UserPindahExport;
use App\Imports\PendudukImport;
use App\Models\agama;
use App\Models\hubungan_keluarga;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\Penduduk;
use App\Models\rt;
use App\Models\status_perkawinan;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;

class PendudukController extends Controller
{
    public function index()
    {
        $data=Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"));
        if(request("search")){
            $data->whereIn("id",Penduduk::where("NIK","like","%".request("search")."%")->orWhere("kk","like","%".request("search")."%")->orWhere("nama","like","%".request("search")."%")->get("id"));
        }
        // dd(Penduduk::);
        return view(
            'data_penduduk',
            [
                "title" => "Data Penduduk",
                // "penduduks"=>Penduduk::all()
                "penduduks" => $data->orderBy('rt_id', 'asc')->orderBy('kk', 'asc')->paginate(15)
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
            "rt" => "required|max:71|min:1",
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
            "kemiskinan" => $request["kemiskinan"],
            "nik_ibu"=>$request["nik_ibu"],
            "nik_ayah"=>$request["nik_ayah"],
            "tanggal_cerai"=>$request["tanggal_cerai"],
            "nomor_akta_cerai"=>$request["no_akta_cerai"],
            "nomor_bpjs"=>$request["bpjs"],
            "jabatan"=>$request["jabatan"],
            "telepon"=>$request["telepon"],
            "nomor_ijazah"=>$request["ijazah"],
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
            "rt" => "required|max:71",
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
            "kemiskinan" => $request["kemiskinan"],
            "nik_ibu"=>$request["nik_ibu"],
            "nik_ayah"=>$request["nik_ayah"],
            "tanggal_cerai"=>$request["tanggal_cerai"],
            "nomor_akta_cerai"=>$request["no_akta_cerai"],
            "nomor_bpjs"=>$request["bpjs"],
            "jabatan"=>$request["jabatan"],
            "telepon"=>$request["telepon"],
            "nomor_ijazah"=>$request["ijazah"],
        ]);
         return redirect()->route("penduduk");
    }
    public function keluar(Penduduk $penduduk){
        Penduduk::where("id",$penduduk->id)->update([
            "status_penduduk_baru"=>"Keluar"
        ]);
        return redirect()->back();
    }
    public function hapusPenduduk($id){
        Penduduk::where("id",'=',$id)->delete();
        return redirect()->back();
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
            "penduduks"=>Penduduk::where("status_penduduk_baru","Pindah Masuk")->get()
        ]);
    }
    public function tampilKk(){
        $data=Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("hubungan_keluarga","=","KEPALA KELUARGA")->orderBy('rt_id', 'asc');
        if(request("search")){
            $data->whereIn("id",Penduduk::where("kk","like","%".request("search")."%")->orWhere("nama","like","%".request("search")."%")->get("id"));
        }
        return view("data_kk",[
            "title"=>"Data KK",
            "kks" => $data->paginate(15),
        ]);
    }
    public function detailKk($kk){
        return view("detail_kk",[
            "title"=>"Data KK",
            "kk"=>$kk,
            "penduduks" => Penduduk::with(["rt", "rt.rw", "rt.rw.dusun"])->whereNull("tanggal_kematian")->whereNotIn("id",Penduduk::where("status_penduduk_baru","Keluar")->get("id"))->where("kk","=",$kk)->get()
        ]);
    }
    public function keluarKK(string $kk){
        Penduduk::where("kk",'=',$kk)->update([
            "status_penduduk_baru"=>"Keluar"
        ]);
        return redirect()->route("data_kk");
    }
    public function hapusKK(string $kk){
        Penduduk::where("kk",'=',$kk)->delete();
        return redirect()->route("data_kk");
    }


    public function importPenduduk(Request $request){
        DB::table('penduduks')->truncate();
        Excel::import(new PendudukImport,$request->file("data_penduduk"));
        return back();
    }
    public function download_active(){
        $date = date('d-m-y h:i:s');
        return Excel::download(new UserActiveExport,"penduduk_aktif_{$date}.xlsx");
    }
    public function download_all(){
        $date = date('d-m-y h:i:s');
        return Excel::download(new UserAllExport,"penduduk_{$date}.xlsx");
    }
    public function download_pindah(){
        $date = date('d-m-y h:i:s');
        return Excel::download(new UserPindahExport,"penduduk_pindah_{$date}.xlsx");
    }
    public function download_keluar(){
        $date = date('d-m-y h:i:s');
        return Excel::download(new UserKeluarExport,"penduduk_keluar_{$date}.xlsx");
    }
    public function download_meninggal(){
        $date = date('d-m-y h:i:s');
        return Excel::download(new UserMeninggalExport,"penduduk_meninggal_{$date}.xlsx");
    }

    public function login(){
        return view('login.index',[
            'title'=>'Login Page'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login.index")->withSuccess('Login details are not valid');
    }
}
