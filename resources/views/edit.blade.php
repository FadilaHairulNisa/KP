@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Industri Manufaktur</h3>
        <form action='#' method='post' class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="inputKodeKab" class="form-label">Kode Kabupaten/Kota </label>
            <input type="Kecamatan" class="form-control" name='kodekec' placeholder="Masukan Kode Kecamatan" value="{{$produksi->kode_kab_kota}}" id="kodekec">
        </div>
        <div class="col-md-6">
            <label for="inputKec" class="form-label">Kode Kecamatan</label>
            <input type="Kecamatan" class="form-control" name='kodekec' placeholder="Masukan Kode Kecamatan" value="{{ $produksi->kode_kec }}" id="kodekec">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nama Kabupaten/Kota </label>
            <select class="form-select" name="kab" aria-label="Default select example" value="{{ $produksi->nama_kab_kota }}" id="kab">
                <option selected>Pilih Kab/Kota</option>
                <option value="1">Kendari</option>
                <option value="2">Bau-Bau</option>
                <option value="3">Bombana </option>
                <option value="4">Wakatobi</option>
                <option value="5">Buton </option>
                <option value="6">Buton Selatan</option>
                <option value="7">Buton Tengah</option> 
                <option value="8">Buton Utara</option>
                <option value="9">Kolaka</option>
                <option value="10">Kolaka Timur</option>
                <option value="11">Kolaka Utara</option>
                <option value="12">Konawe</option>
                <option value="13">Konawe Kepulauan</option>
                <option value="14">Konawe Selatan </option>
                <option value="15">Konawe Utara</option>
                <option value="16">Muna</option>
                <option value="17">Muna Barat</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputKecamatan" class="form-label">Nama Kecamatan </label>
            <input type="Kecamatan" class="form-control" name='kec' placeholder="Masukan Nama Kecamatan" value="{{ $produksi->kec }}" id="kec">
        </div>
        <div class="col-md-6">
            <label for="inputPerusahaan" class="form-label">Nama Perusahaan</label>
            <input type="Perusahaan" class="form-control" name='perindustri' placeholder="Masukan Nama Perusahaan Industri" value="{{ $produksi->nama_industri }}" id="perindustri">
        </div>
        <div class="col-md-6">
            <label for="inputAlamat" class="form-label">Alamat Perusahaan</label>
            <input type="text" class="form-control" name='alamat' placeholder="Masukan Alamat Perusahaan Industri" value="{{ $produksi->lokasi }}" id="alamat">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Produk</label>
            <input type="text" class="form-control" name='produksi' placeholder="Masukan Hasil Produksi" value="{{ $produksi->produksi }}" id="produksi">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">Tanggal Komersil</label>
            <input type="date" class="form-control" name='tgl_komersil' value="{{ $produksi->thn_komersil }}" id="tgl_komersil" >
        </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
@endsection