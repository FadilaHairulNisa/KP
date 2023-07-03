@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Referensi Kabupaten/Kota</h3>
        <form action='/ref_kota/edit/{{$kab_kota->id}}' method='post' class="col g-3">
        @csrf
        @method('put')
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKodeKab" class="form-label">Kode</label>
            <input type="text" class="form-control" name='kode' placeholder="Masukan Kode Kabupaten/Kota" value="{{$kab_kota->kode_kab}}">
        </div>
        <div class="col-md-6">
            <label for="inputNamaKabKota" class="form-label">Kabupaten/Kota </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kabupaten/Kota" value="{{$kab_kota->nama_kab}}">
        </div>

        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
        </form>
@endsection