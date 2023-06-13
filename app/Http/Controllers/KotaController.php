<?php

namespace App\Http\Controllers;

use App\Models\Tb_kab_kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        $kab_kota= Tb_kab_kota::all();
        return view('ref_kota', ['kab_kota' => $kab_kota]);
    }

    public function create()
    {
        return view('input_kab');
    }

    public function store(Request $request){
        $kab_kota=new Tb_kab_kota();
        $kab_kota->kode_kab = $request->kode;
        $kab_kota->nama_kab = $request->nama;
        $kab_kota->save();

        return redirect('ref_kota')->with('success', 'Berhasil menambahkan data');
    }   
}
