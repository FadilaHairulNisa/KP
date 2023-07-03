<?php

namespace App\Http\Controllers;

use App\Models\Tb_kategori;
use App\Models\StatusProduksi;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Tb_kategori::all();
        return view('kategori', ['kategori' => $kategori]);
    }

    public function create() {
        return view('input_kategori');
    }

    public function store(Request $request) {
        $kategori = new Tb_kategori();
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect('kategori')->with('success', 'Berhasil menambahkan data');
    }
}
