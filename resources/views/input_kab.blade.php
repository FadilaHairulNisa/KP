@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Referensi Kabupaten/Kota</h3>
        <form action='{{ url('/ref_kota/tambah_data/add') }}' method='post' class="col g-3">
        @csrf
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKodeKab" class="form-label">Kode Kabupaten/Kota </label>
            <input type="text" class="form-control" name='kode' placeholder="Masukan Kode Kabupaten/Kota">
        </div>
        <div class="col-md-6">
            <label for="inputNamaKabKota" class="form-label">Nama Kabupaten/Kota </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kabupaten/Kota">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
@endsection