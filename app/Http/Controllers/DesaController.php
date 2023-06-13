<?php

namespace App\Http\Controllers;

use App\Models\Tb_desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index(){
        $desa= Tb_desa::all();
        return view('ref_desa', ['desa' => $desa]);
    }

    public function create()
    {
        return view('input_desa');
    }

    public function store(Request $request){
        $desa=new Tb_desa();
        $desa->kode_desa= $request->kode;
        $desa->nama_desa = $request->nama;
        $desa->save();

        return redirect('ref_desa')->with('success', 'Berhasil menambahkan data');
    }
}
