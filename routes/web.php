<?php

use App\Http\Controllers\DesaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\KategoriController;
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
// Route::get('/tabel_industri', [ProduksiController::class,'index']);

// Route::get('/tabel_industri/tambah_data', function () {
//     return view('create');
// });


// Route::post('/create/tambah_data', [ProduksiController::class, 'store']);

// Route::get('/create/edit/{id}', [ProduksiController::class, 'edit']);
// Route::put('/create/edit/{id}', [ProduksiController::class, 'edit']);
//end: Produksi


//kab-kota
// Route::post('/create/ref_kota', [ReferensiController::class, 'store']);
Route::get('/ref_kota', [KotaController::class, 'index']);
Route::get('/ref_kota/tambah_data', [KotaController::class, 'create']);
Route::post('/ref_kota/tambah_data/add', [KotaController::class, 'store']);
Route::get('/ref_kota/edit/{id}', [KotaController::class, 'edit']);
Route::put('/ref_kota/edit/{id}', [KotaController::class, 'update']);
// Route::delete('/hapus/{id}', [KotaController::class, 'destroy']);
Route::delete('test/{id}', [KotaController::class, 'destroy']);



//kecamatan
Route::get('/ref_kec', [KecController::class, 'index']);
Route::get('/ref_kec/tambah_data', [KecController::class, 'create']);
Route::post('/ref_kec/tambah_data/add', [KecController::class, 'store']);
Route::get('/ref_kec/edit/{id}', [KecController::class, 'edit']);
Route::put('/ref_kec/edit/{id}', [KecController::class, 'update']);


// desa
Route::get('/ref_desa', [DesaController::class, 'index']);
Route::get('/ref_desa/tambah_data', [DesaController::class, 'create']);
Route::post('/ref_desa/tambah_data/add', [DesaController::class, 'store']);
Route::get('/ref_desa/edit/{id}', [DesaController::class, 'edit']);
Route::put('/ref_desa/edit/{id}', [DesaController::class, 'update']);

//tabel kategori
Route::get('/kategori',[KategoriController::class, 'index']);
Route::get('/kategori/tambah_data', [KategoriController::class, 'create']);
Route::post('/kategori/tambah_data/add', [KategoriController::class, 'store']);

//tabel produksi
Route::get('/data_produksi', [IndustriController::class, 'index']);
Route::get('/data_produksi/tambah_data', [IndustriController::class, 'create']);
Route::post('/data_produksi/tambah_data/add', [IndustriController::class, 'store']);
Route::get('/data_produksi/detail/{id}', [IndustriController::class, 'show']);

//Login
Route::get('/login', function(){
    return view('login');
});
//register
Route::get('/register', function(){
    return view('register');
});


// //tabel produksi
// Route::get('/kategori', [::class, 'index']);
// Route::get('/data_produksi/tambah_data', [IndustriController::class, 'create']);
// Route::post('/data_produksi/tambah_data/add', [IndustriController::class, 'store']);
// Route::get('/data_produksi/detail/{id}', [IndustriController::class, 'show']);

// //
// Route::get('/status', function () {
//     return view('status');
// });

// Route::get('/ref_kab_kota', [ReferensiController::class, 'show']);
// Route::get('/referensi-kab-kota', [ReferensiController::class, 'showReferensi']);



// Route::get('/laporan', function(){
//     return view('laporan');
// });

// Route::get('/referensi_kecamatan', function (){
//     return view('ref_kecamatan');
// });

// Route::get('/referensi_desa', function (){
//     return view('ref_desa');
// });



