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
use App\Http\Controllers\CustomAuthController;

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
})->name("dashboard");

Route::get('/data_kk', function () {
    return view('data_kk',[
        "title"=>"Data Kartu Keluarga"
    ]);
});
//penduduk

    Route::get('/data_penduduk', [PendudukController::class,"index"])->name("penduduk");
    Route::get('/tambah', [PendudukController::class,"tampilTambah"]);
    Route::post('/tambah', [PendudukController::class,"tambah"]);

    Route::get('data_penduduk/detail/{penduduk:id}', [PendudukController::class,"show"]);

    Route::get('data_penduduk/edit/{penduduk:id}', [PendudukController::class,"tampilEdit"]);
    Route::post('data_penduduk/edit/{penduduk:id}', [PendudukController::class,"edit"]);

    Route::get('data_penduduk/keluar/{penduduk:id}', [PendudukController::class,"keluar"]);

    Route::get('/penduduk_keluar', [PendudukController::class,"tampilKeluar"]);

    Route::post('data_penduduk/import', [PendudukController::class,"importPenduduk"]);

    Route::get('/kematian', [PendudukController::class,"tampilKematian"]);
    Route::get('/undo_kematian/{penduduk:id}', [PendudukController::class,"undoKematian"]);

    Route::get('/pindah', [PendudukController::class,"tampilPindah"]);

// Route::get('/detail_kk', function () {
//     return view('detail_kk',[
//         "title"=>"Detail Kartu Keluarga"
//     ]);
// });



//sesuatu
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');





