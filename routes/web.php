<?php

use App\Http\Controllers\DesaController;
use App\Http\Controllers\KecController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\ReferensiController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

// Route::resource('index', ProduksiController::class);
// Route::get('/tabel_referensi_kota', [ReferensiController::class,'index']);

Route::get('/', function(){
    return view('dashboard');
});


//Produksi
Route::get('/tabel_industri', [ProduksiController::class,'index']);

Route::get('/tabel_industri/tambah_data', function () {
    return view('create');
});

Route::post('/create/tambah_data', [ProduksiController::class, 'store']);

Route::get('/create/edit/{id}', [ProduksiController::class, 'edit']);
Route::put('/create/edit/{id}', [ProduksiController::class, 'edit']);
//end: Produksi


//kab-kota
// Route::post('/create/ref_kota', [ReferensiController::class, 'store']);
Route::get('/ref_kota', [KotaController::class, 'index']);
Route::get('/ref_kota/tambah_data', [KotaController::class, 'create']);
Route::post('/ref_kota/tambah_data/add', [KotaController::class, 'store']);


//kecamatan
Route::get('/ref_kec', [KecController::class, 'index']);
Route::get('/ref_kec/tambah_data', [KecController::class, 'create']);
Route::post('/ref_kec/tambah_data/add', [KecController::class, 'store']);


// desa
Route::get('/ref_desa', [DesaController::class, 'index']);
Route::get('/ref_desa/tambah_data', [DesaController::class, 'create']);
Route::post('/ref_desa/tambah_data/add', [DesaController::class, 'store']);

//
Route::get('/status', function () {
    return view('status');
});
Route::get('/create/ref_kota', function () {
    return view('form.create_ref_kota');
});




// Route::get('/ref_kab_kota', [ReferensiController::class, 'show']);
Route::get('/referensi-kab-kota', [ReferensiController::class, 'showReferensi']);



Route::get('/laporan', function(){
    return view('laporan');
});

Route::get('/referensi_kecamatan', function (){
    return view('ref_kecamatan');
});

Route::get('/referensi_desa', function (){
    return view('ref_desa');
});


//Login
Route::get('/login', function(){
    return view('login');
});
//register
Route::get('/register', function(){
    return view('register');
});

