@extends('layout.index')
@section('content')
<h3 class="text-center">Form Input Data Industri</h3>
<form action="{{ url('/data_produksi/tambah_data/add')}}" method='post' class="col g-3">
   @csrf
   <div class="col-md-6 mb-3 mt-4">
      <label for="desa" class="form-label">Desa</label>
      <select name="desa" id="" class="form-control">
         <option value=""></option>
         @foreach ($desa as $item)
         <option value="{{ $item->id }}">{{ $item->nama_desa }}</option>
         @endforeach
      </select>
   </div>
   <div class="col-md-6 mb-3 mt-4">
      <label for="nama" class="form-label">Nama Perusahaan</label>
      <input type="text" class="form-control" name='nama' placeholder="Nama Perusahaan">
   </div>
   <div class="col-md-6 mb-3 mt-4">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" placeholder="Alamat">
   </div>
   <div class="col-md-6 mb-3 mt-4">
      <label for="produk" class="form-label">Produk</label>
      <input type="text" class="form-control" name="produk" placeholder="Nama Produk">
   </div>
   <div class="col-md-6 mb-3 mt-4">
      <label for="kategori" class="form-label">Kategori Industri</label>
      <select name="kategori" id="" class="form-control">
         <option value=""></option>
         @foreach ($kategori as $item)
         <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
         @endforeach
      </select>
   </div>
   <div class="col-md-6 mb-3 mt-4">
      <label for="tahun" class="form-label">Tahun Komersil</label>
      <input type="text" class="form-control" name="tahun" placeholder="Tahun Komersi">
   </div>
   

   <div class="col-12 mt-3">
      <button type="submit" class="btn btn-primary">Simpan Data</button>
   </div>
</form>
@endsection