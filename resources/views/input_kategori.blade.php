@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Kategori</h3>
        <form action="{{ url('/kategori/tambah_data/add')}}" method='post' class="col g-3">
        @csrf
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKategori" class="form-label">Jenis Kategori Industri </label>
            <input type="text" class="form-control" name='kategori' placeholder="Masukan Kategori Industri">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        
        </form>
@endsection