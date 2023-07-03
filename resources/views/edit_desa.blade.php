@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Referensi Desa</h3>
        <form action='/ref_desa/edit/{{$desa->id}}' method='post' class="col g-3">
        @csrf
        @method('put')
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKodeDesa" class="form-label">Kode Desa</label>
            <input type="text" class="form-control" name='kode' placeholder="Masukan Kode Kabupaten/Kota" value="{{$desa->kode_desa}}">
        </div>
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputNamaDesa" class="form-label">Nama Desa</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kabupaten/Kota" value="{{$desa->nama_desa}}">
        </div>
        <div class="col-md-6 mb-3 mt-4">
            <label for="kec" class="form-label">Kecamatan</label>
            <select name="kec" id="" class="form-control">
                <option value=""></option>
                @foreach ($kec as $item)
                <option 
                @if ($desa->id_kec === $item->id)
                    selected
                @endif
                value = "{{ $item->id }}">{{ $item->nama_kec }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 mb-3 mt-4">
            <label for="kab" class="form-label">Kabupaten/Kota</label>
            <select name="kab" id="" class="form-control">
                <option value=""></option>
                @foreach ($kabupaten as $item)
                <option 
                @if ($desa->id_kab === $item->id)
                    selected
                @endif
                value="{{ $item->id }}">{{ $item->nama_kab }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
@endsection