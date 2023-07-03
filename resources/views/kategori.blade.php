@extends('layout.index')
@section('content')

<div class="card px-2 py-3">
    <div class="text-center">
        <h1>Kategori Industri</h1>
    </div>
    <div class="d-grid gap-2 d-md-block px-3">    
        <a href="/kategori/tambah_data" class="btn btn-primary" type="button">Tambah Data</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_kategori }}</td>
                <td>
                    <div class="d-grid gap-2 d-md-block">
                        <a href='{{ url("/create/edit/".$item->id) }}' class="ti ti-edit btn btn-warning btn-sm">Edit</a>
                        <a class="ti ti-trash btn btn-danger btn-sm">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
