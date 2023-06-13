@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Referensi Kecamatan</h3>
        <form action="{{ url('/ref_kec/tambah_data/add')}}" method='post' class="col g-3">
        @csrf
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKodeKec" class="form-label">Kode Kecamatan </label>
            <input type="text" class="form-control" name='kode' placeholder="Masukan Kode Kabupaten/Kota">
        </div>
        <div class="col-md-6">
            <label for="inputNamaKec" class="form-label">Nama Kecamatan </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kabupaten/Kota">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
@endsection