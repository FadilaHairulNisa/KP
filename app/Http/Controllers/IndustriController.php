<?php

namespace App\Http\Controllers;

use App\Models\StatusProduksi;
use App\Models\Tb_desa;
use App\Models\Tb_kategori;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function index()
    {
        $industri = StatusProduksi::all();
        return view('industri', ['industri'=>$industri]);
    }

    public function create()
    {
        $desa = Tb_desa::all();
        $kategori = Tb_kategori::all();
        return view('input_industri', ['desa' => $desa, 'kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        $industri = new StatusProduksi();
        $industri->id_desa = $request->desa;
        $industri->id_kategori = $request->kategori;
        $industri->nama_perusahaan = $request->nama;
        $industri->alamat = $request->alamat;
        $industri->produk = $request->produk;
        $industri->tahun_komersil = $request->tahun;
        $industri->save();
        return redirect('data_produksi')->with('success', 'Berhasil menambahkan data');
    }

    public function show($id)
    {
        $industri = StatusProduksi::findOrFail($id);
        return view('detail_industri', ['industri' => $industri]);
    }
}
