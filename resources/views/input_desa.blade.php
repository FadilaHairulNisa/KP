@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Referensi Desa</h3>
        <form action="{{ url('/ref_desa/tambah_data/add')}}" method='post' class="col g-3">
        @csrf
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKodeDesa" class="form-label">Kode Desa </label>
            <input type="text" class="form-control" name='kode' placeholder="Masukan Kode Kabupaten/Kota">
        </div>
        <div class="col-md-6">
            <label for="inputNamaDesa" class="form-label">Nama Desa </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kabupaten/Kota">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
@endsection