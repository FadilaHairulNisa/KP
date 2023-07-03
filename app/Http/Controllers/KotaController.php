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
    
    public function edit($id) {
        $kab_kota = Tb_kab_kota::find($id);

        return view('edit_kab_kota', ['kab_kota' => $kab_kota]);
    }

    public function update(Request $request, $id)
    {
        $kab_kota = Tb_kab_kota::find($id);
        $kab_kota->kode_kab = $request->kode;
        $kab_kota->nama_kab = $request->nama;
        $kab_kota->save();

        // dd("yaya");
        return redirect('/ref_kota')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $kab_kota = Tb_kab_kota::findOrFail($id);
        $kab_kota->delete();

        dd("yaya");
        return redirect('/ref_kota')>with('success', 'Data berhasil dihapus');
    }

    // public function destroy($id)
    // {
    //     dd('$kab_kota');
    //     $kab_kota = Tb_kab_kota::find($id);
    //     $kab_kota->delete();

    //     return redirect('/ref_kota')->with('success', 'Data berhasil dihapus');
    // }

        
    //     // return redirect('/ref_kota')->with('error', 'Data tidak ditemukan');
    // }
    // public function destroy($id)
    // {
    //     $nip = $id;
    //     $dosen = Dosen::findOrFail($nip);
    //     $dosen->delete();

    //     return redirect('/admin/dosen');
    // }
}
