<?php

namespace App\Http\Controllers;

use App\Models\Tb_desa;
use App\Models\Tb_kab_kota;
use App\Models\Tb_kec;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index(){
        $desa= Tb_desa::all();

        return view('ref_desa', ['desa' => $desa]);
    }

    public function create()
    {
        $kec = Tb_kec::all();
        $kab = Tb_kab_kota::all();
        return view('input_desa', ['kec' => $kec, 'kab' => $kab]);
    }

    public function store(Request $request){
        $desa=new Tb_desa();
        $desa->kode_desa= $request->kode;
        $desa->nama_desa = $request->nama;
        $desa->id_kec = $request->kec;
        $desa->id_kab = $request->kab;
        $desa->save();


        return redirect('ref_desa')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id) {
        $kab_kota= Tb_kab_kota::all();
        $kec = Tb_kec::all();
        $desa = Tb_desa::find($id);

        return view('edit_desa', ['desa' => $desa, 'kec' => $kec, 'kabupaten' => $kab_kota]);
    }

    public function update(Request $request, $id)
    {
        $desa = Tb_desa::find($id);
        // dd($desa);
        $desa->kode_desa = $request->kode;
        $desa->nama_desa = $request->nama;
        $desa->id_kec = $request->kec;
        $desa->id_kab = $request->kab;
        $desa->save();

        return redirect('/ref_desa')->with('success', 'Data berhasil diupdate');
    }
}
