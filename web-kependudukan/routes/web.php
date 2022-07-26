<?php

use App\Http\Controllers\PendudukController;
use App\Models\agama;
use App\Models\hubungan_keluarga;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\Penduduk;
use App\Models\status_perkawinan;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('testing',[
        "penduduks"=>Penduduk::with(["hubungan_keluarga","agama","pendidikan","status","pekerjaan"])->latest()->get()
    ]);
});
Route::get('/test/{cat:deskripsi}', function (pekerjaan $cat) {
    return view('testing_detail',[
        "penduduk"=>$cat->penduduk
    ]);
});


// jadi
Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard",
        "bagian1"=>"Penduduk",
        "jumlah"=>100
    ]);
});

Route::get('/data_kk', function () {
    return view('data_kk',[
        "title"=>"Data Kartu Keluarga"
    ]);
});

Route::get('/data_penduduk', [PendudukController::class,"index"]);

Route::get('/tambah', [PendudukController::class,"tampilTambah"]);
Route::post('/tambah', [PendudukController::class,"tambah"]);

// Route::post('/tambah', function () {
//     return view('data_penduduk',[
//         "title"=>"Data Penduduk"
//     ]);
// });
Route::get('/detail', function () {
    return view('detail',[
        "title"=>"Detail penduduk"
    ]);
});

Route::get('/detail_kk', function () {
    return view('detail_kk',[
        "title"=>"Detail Kartu Keluarga"
    ]);
});

Route::get('/sirkulasi_penduduk', function () {
    return view('sirkulasi_penduduk',[
        "title"=>"sirkulasi penduduk"
    ]);
});

