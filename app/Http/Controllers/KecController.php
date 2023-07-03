<?php

namespace App\Http\Controllers;

use App\Models\Tb_kab_kota;
use App\Models\Tb_kec;
use Illuminate\Http\Request;

class KecController extends Controller
{
    public function index(){
        $kec = Tb_kec::with('kabupaten')->get();
        // foreach ($kec as $item) {
        //     dd($item->kabupaten);
        // }
        return view('ref_kecamatan', ['kec' => $kec]);
    }

    public function create()
    {
        $kabupaten = Tb_kab_kota::all();
        return view('input_kec', ['kabupaten'=>$kabupaten]);
    }

    public function store(Request $request){
        $kec=new Tb_kec();
        $kec->kode_kec= $request->kode;
        $kec->nama_kec = $request->nama;
        $kec->id_kab = $request->kab;
        $kec->save();

        return redirect('ref_kec')->with('Success', 'Berhasil menambahkan data');
    }

    public function edit($id) {
        $kab_kota= Tb_kab_kota::all();
        $kec = Tb_kec::find($id);

        return view('edit_kec', ['kec' => $kec, 'kabupaten' => $kab_kota]);
    }

    public function update(Request $request, $id)
    {
        $kec = Tb_kec::find($id);
        $kec->kode_kec = $request->kode;
        $kec->nama_kec = $request->nama;
        $kec->save();

        return redirect('/ref_kec')->with('success', 'Data berhasil diupdate');
    }
}
