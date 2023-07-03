@extends('layout.index')
@section('content')

<div class="card px-2 py-3">
    <center>
        <h1 >Referensi Data Kabupaten/Kota</h1>
    </center>
    <div class="d-grid gap-2 d-md-block px-3">    
        <a href="/ref_kota/tambah_data" class="btn btn-primary" type="button">Tambah Data</a>
    </div>
    {{-- <table class="table table-bordered">
    <table> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Kabupaten/Kota</th>
                <th scope="col">Nama Kabupaten/Kota</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kab_kota as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_kab }}</td>
                    <td>{{ $item->nama_kab }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a href='{{ url('/ref_kota/edit/'. $item->id) }}' class="ti ti-edit btn btn-warning btn-sm">Edit</a>
                            {{-- <a href="{{ url('/ref_kota/hapus/', ['id' => $item->id]) }}">
                                <button class="btn btn-default">
                                Delete
                                </button> --}}
                                <form action="/ref_kota/hapus/{{ $item->id }}" method="post">
                                    {{ method_field('delete') }}
                                    <button class="btn btn-default" type="submit" value="Delete">Delete</button>
                                </form>
                            {{-- <form action='/ref_kota/hapus/{{ $item->id }}' method="post" id="delete">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin Hapus Data Ini?')" type="submit" class="ti ti-trash btn btn-danger btn-sm">
                                    <i class="ri-delete-bin-6-line"></i>DeleteDelete
                                {{-- </button> --}}
                            {{-- </form> --}} --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- </table>
    </table> --}}
</div>
@endsection