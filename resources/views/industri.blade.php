@extends('layout.index')
@section('content')
<div class="text-center "> 
    <h3>Data Persebaran Lokasi Industri Manufaktur</h3>
    <h3>Provinsi Sulawesi Tenggara</h3>
</div>
<div class="d-flex gap-1">
    <div class="d-grid gap-2 d-md-block">
        <a href="/data_produksi/tambah_data" class="btn btn-primary" type="button">Tambah Data</a>
    </div> 
    <div class="d-grid gap-2 d-md-block">
        <a href="" class="btn btn-success" type="button">Import Excel</a>
    </div> 
    <div class="d-grid gap-2 d-md-block">
        <a href="" class="btn btn-success" type="button">Export Excel</a>
    </div> 
</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col text-center">Kabupaten/Kota</th>
            <th scope="col text-center">Kecamatan</th>
            <th scope="col text-center">Desa</th>
            <th scope="col text-center">Nama Perusahaan</th>
            <th scope="col text-center">Alamat</th>
            <th scope="col text-center">Produk</th>
            <th scope="col text-center">Jenis Industri</th>
            <th scope="col text-center">Tahun Komersil</th>
            <th scope="col text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($industri as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->desa->kab->nama_kab }}</td>
            <td>{{ $item->desa->kec->nama_kec }}</td>
            <td>{{ $item->desa->nama_desa }}</td>
            <td>{{ $item->nama_perusahaan }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->produk }}</td>
            <td>{{ $item->jenis_industri }}</td>
            <td>{{ $item->tahun_komersil }}</td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                    <a href='{{ url('/data_produksi/detail/'.$item->id) }}' class="ti ti-file-description btn btn-primary btn-sm"></a>
                    <a href='{{ url('/create/edit/'.$item->id) }}' class="ti ti-edit btn btn-warning btn-sm"></a>
                    <a class="ti ti-trash btn btn-danger btn-sm text-white"></a>
                </div>
            </td>
        </tr     
        @endforeach
@endsection