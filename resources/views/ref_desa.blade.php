@extends('layout.index')
@section('content')


<div class="card px-2 py-3">
    <div class="text-center">
        <h1>Referensi Data Desa</h1>
    </div>
    <div class="d-grid gap-2 d-md-block px-3">    
        <a href="/ref_desa/tambah_data" class="btn btn-primary" type="button">Tambah Data</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Desa</th>
            <th scope="col">Nama Desa</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kabupaten/Kota</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($desa as $item)
            
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_desa }}</td>
            <td>{{ $item->nama_desa }}</td>
            <td>{{ $item->kec->nama_kec }}</td>
            <td>{{ $item->kab->nama_kab }}</td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                <a href='{{ url ('/ref_desa/edit/'.$item->id) }}' class="ti ti-edit btn btn-warning btn-sm">Edit</a>
                <a class="ti ti-trash btn btn-danger btn-sm">Delete</a>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
    
</div>
@endsection