<?php

namespace App\Http\Controllers;

use App\Models\status_produksi;
use App\Models\Tb_kec;
use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produksi = status_produksi::with('kec');
        return dd($produksi->kecamatan);
        return view('tabel', ['produksi'=>$produksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kec = Tb_kec::all();
        return view('views.create', ['kec'=>$kec]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produksi=new status_produksi();
        $produksi->kode_kab_kota=$request->kodekab;
        $produksi->nama_kab_kota=$request->kab;
        $produksi->nama_industri=$request->perindustri;
        $produksi->lokasi=$request->alamat;
        $produksi->produksi=$request->produksi;
        $produksi->save();
        return redirect('tabel_industri')->with('success', 'Berhasil menambahkan data');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produksi=status_produksi::findOrFail($id);
        return view('edit', ['produksi' => $produksi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
