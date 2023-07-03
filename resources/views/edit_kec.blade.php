@extends('layout.index')
@section('content')
    <h3 class="text-center"> Form Referensi Kecamatan</h3>
        <form action='/ref_kec/edit/{{$kec->id}}' method='post' class="col g-3">
        @csrf
        @method('put')
        <div class="col-md-6 mb-3 mt-4">
            <label for="inputKodeKec" class="form-label">Kode Kecamatan </label>
            <input type="text" class="form-control" name='kode' placeholder="Masukan Kode Kabupaten/Kota" value="{{$kec->kode_kec}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="inputNamaKec" class="form-label">Nama Kecamatan </label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kabupaten/Kota" value="{{$kec->nama_kec}}">
        </div>
        <div class="col-md-6">
            <label for="kab" class="form-label">Kabupaten</label>
            <select class="form-control" name="kab">
                <option value="">Pilih</option>
                @foreach ($kabupaten as $item)
                <option 
                @if ($kec->id_kab === $item->id)
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