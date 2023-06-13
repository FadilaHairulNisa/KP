@extends('layout.index')
@section('content')
<div class="text-center"> 
<h3> Data Persebaran Lokasi Industri Manufaktur </h3>
<h3> Provinsi Sulawesi Tenggara </h3>
</div> 
<table class="table table-bordered">
    <table>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kabupaten/Kota_id</th>
            <th scope="col">Kecamatan_id</th>
            <th scope="col">Desa_id</th>
            <th scope="col">Kabupaten/Kota</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Desa</th>
            <th scope="col">Nama Perusahaan </th>
            <th scope="col">Alamat </th>
            <th scope="col">Produk</th>
            <th scope="col">Jenis Industri</th>
            <th scope="col">Tahun Komersil</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>002</td>
            <td>Muna</td>
            <td>076</td>
            <td>Kecamatan Napabalano</td>
            <td>MITRA PILIPS SEAFOOD INDONESIA, UD</td>
            <td>Jl. La Paga Keluarahan Napabalano</td>
            <td>Daging Kepiting</td>
            <td>06-2006</td>
@endsection