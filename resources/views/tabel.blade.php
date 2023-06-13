@extends('layout.index')
@section('content')

<div class="card px-lg-2">
    <center>
        <h1>Direktori Industri Manufaktur Skala Menengah Besar</h1>
        <h1>Badan Pusat Statistik <br>Provinsi Sulawesi Tenggara</h1>
    </center>
    <div class="d-grid gap-2 d-md-block">    
        <a href='tabel_industri/tambah_data' class="btn btn-primary" type="button">Tambah Data</a>
    </div>
    <table class="table table-bordered">
    <table>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kab/Kota_id</th>
            <th scope="col">Kecamatan_id</th>
            <th scope="col">Desa_id</th>
            <th scope="col">Nama Kabupaten/Kota</th>
            <th scope="col">Nama Kecamatan</th>
            <th scope="col">Nama Desa</th>
            <th scope="col">Nama Perusahaan </th>
            <th scope="col">Produk</th>
            <th scope="col">Jenis Industri Manufaktur</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($produksi as $item)
        
        <tr>
            <td>{{$item->kab_kota_id}}</td>
            <td>{{$item->kec}}</td>
            <td>{{$item->Desa_id}}</td>
            <td>{{$item->kode_kab_kota}}</td>
            <td>{{$item->nama_kab_kota}}</td>
            <td>{{$item->nama_industri}}</td>
            <td>{{$item->produk}}</td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                <a href='{{ url('/create/edit/'.$item->id) }}' class="ti ti-edit btn btn-warning btn-sm">Edit</a>
                <a class="ti ti-trash btn btn-danger btn-sm">Delete</a>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </table>
    </table>
    
</div>
@endsection