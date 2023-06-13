<?php

namespace App\Http\Controllers;

use App\Models\Tb_kec;
use Illuminate\Http\Request;

class KecController extends Controller
{
    public function index(){
        $kec= Tb_kec::all();
        return view('ref_kecamatan', ['kec' => $kec]);
    }

    public function create()
    {
        return view('input_kec');
    }

    public function store(Request $request){
        $kec=new Tb_kec();
        $kec->kode_kec= $request->kode;
        $kec->nama_kec = $request->nama;
        $kec->save();

        return redirect('ref_kec')->with('success', 'Berhasil menambahkan data');
    }
}
