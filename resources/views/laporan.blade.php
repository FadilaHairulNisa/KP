@extends('layout.index')
@section('content')
<div class="card px-2">
    <a href="#"></a>
    <h3 class="card-header">Laporan Industri Manufaktur</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Kode Kabupaten/Kota</th>
                <th scope="col">Nama Kabupaten/Kota</th>
                <th scope="col">Industri Sandang</th>
                <th scope="col">Industri Pangan</th>
                <th scope="col">Industri Papan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Buton</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>
                    <div  class="d-grid gap-2 d-md-block">
                    <i class="ti ti-list-details btn btn-danger btn-sm">Detail</i>
                    </div>
                </td>
            </tr>
    </table>
</div>
@endsection