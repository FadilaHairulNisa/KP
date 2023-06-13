@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Industri Manufaktur</h3>
        <form action='{{ url('/create/tambah_data') }}' method='post' class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="inputKodeKab" class="form-label">Kode Kabupaten/Kota </label>
            <input type="text" class="form-control" name='kodekab' placeholder="Masukan Kode Kota/Kabupaten">
        </div>
        <div class="col-md-6">
            <label for="inputKec" class="form-label">Kode Kecamatan</label>
            <input type="text" class="form-control" name='kodekec' placeholder="Masukan Kode Kecamatan">
        </div>
        <div class="col-md-6">
            <label for="inputKodes" class="form-label">Kode Desa</label>
            <input type="text" class="form-control" name='kodes' placeholder="Masukan Kode Desa">
        </div>
        <div class="col-md-6">
            <label for="inputOpsi" class="form-label">Nama Kabupaten/Kota </label>
            <select class="form-select" name="kab" aria-label="Default select example">
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
            <label for="input" class="form-label">Nama Kabupaten/Kota </label>
            <select class="form-select" name="kec_id" id="kec_id" aria-label="Default select example">
                <option disabled value="">Pilih Kab/Kota</option>
                @foreach ($kec as $item)
                    <option value="{{$item->id}}">{{$item->Kecamatan}}></option>
                @endforeach
            </select>
        </div>
        {{-- <div class="col-md-6">
            <label for="inputKecamatan" class="form-label">Nama Kecamatan </label>
            <input type="text" class="form-control" name='kec' placeholder="Masukan Nama Kecamatan">
        </div> --}}
        <div class="col-md-6">
            <label for="inputDesa" class="form-label">Nama Desa </label>
            <input type="text" class="form-control" name='desa' placeholder="Masukan Nama Desa">
        </div>
        <div class="col-md-6">
            <label for="inputPerusahaan" class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control" name='perindustri' placeholder="Masukan Nama Perusahaan Industri">
        </div>
        <div class="col-md-6">
            <label for="inputAlamat" class="form-label">Alamat Perusahaan</label>
            <input type="text" class="form-control" name='alamat' placeholder="Masukan Alamat Perusahaan Industri">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Produk</label>
            <input type="text" class="form-control" name='produksi' placeholder="Masukan Hasil Produksi">
        </div>
        <div class="col-md-6">
            <label for="inputOpsi" class="form-label">Jenis Industri Manufaktur</label>
            <select class="form-select" name="jenis" aria-label="Default select example" id="kab">
                <option selected>Pilih Kab/Kota</option>
                <option value="1">Industri Pengolahan dan Pengawetan Ikan dan Biota air</option>
                <option value="2">Industri Barang Galian bukan Logam</option>
                <option value="3">Indsutri Furniture dan atau Tekstil </option>
                <option value="4">Industri Minyak dan Lemak Nabati dan Hewani</option>
                <option value="5">Industri Penggilingan Padi-padian, Tepung dan Pati </option>
                <option value="6">Industri Minuman dan Makanan</option>
                <option value="7">Industri barang dari plastik</option> 
                <option value="8">Industri Logam Dasar Besi dan Baja</option>
                <option value="9">Industri penggergajian dan pengawetan kayu, rotan, bambu dan sejenisnya</option>
                <option value="10">Industri pembuatan kapal dan perahu</option>
                <option value="11">Industri bahan kimia</option>
                <option value="12">Industri penggergajian dan pengawetan kayu, rotan, bambu dan sejenisnya</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="thn_komersil" class="form-label">Tahun Komersil</label>
            <input type="month" class="form-control" name='thn_komersil' >
        </div>
        </div>
        <div class="col-12 px-4">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
@endsection