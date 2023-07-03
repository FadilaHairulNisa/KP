@extends('layout.index')
@section('content')
<a style="font-size: 18px" href="/data_produksi" class="fw-bold">Data Produksi > </a><span style="font-size: 18px" class="text-primary fw-bold">Detail</span>
<div class="card p-5 mt-3">
   <table class="table table-borderred">
      <tr>
         <h3>{{ $industri->nama_perusahaan }}</h3>
      </tr>
      <tr>
            <td>Alamat Perusahaan</td>
            <td>:</td>
            <td>{{ $industri->alamat }}</td>
         </tr>
      <tr>
         <td class="col-2">Kode Kab/Kota</td>
         <td>:</td>
         <td class="col-10">{{ $industri->desa->kab->kode_kab }}</td>
      </tr>
      <tr>
         <td class="col-2">Kode Kecamatan</td>
         <td>:</td>
         <td class="col-10">{{ $industri->desa->kec->kode_kec }}</td>
      </tr>
      <tr>
         <td class="col-2">Kode Desa</td>
         <td>:</td>
         <td class="col-10">{{ $industri->desa->kode_desa }}</td>
      </tr>
      <tr>
         <td>Nama Kab/Kota</td>
         <td>:</td>
         <td>{{ $industri->desa->kab->nama_kab }}</td>
      </tr>
      <tr>
         <td>Nama Kecamatan</td>
         <td>:</td>
         <td>{{ $industri->desa->kec->nama_kec }}</td>
      </tr>
      <tr>
         <td>Nama Desa</td>
         <td>:</td>
         <td>{{ $industri->desa->nama_desa }}</td>
      </tr>
   
   </table>
</div>
@endsection



