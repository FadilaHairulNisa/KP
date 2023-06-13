<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_produksi extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'kab_kota_id',
        'kec_id',
        'desa_id' ,
        'nama_kab_kota',
        'nama_kec',
        'nama_desa',
        'nama_perusahaan',
        'alamat',
        'produk',
        'jenis_industri',
        'thn_komersil'
    ];
    protected $table = 'tb_status_produksi';

    public function kecamatan() {
        return $this->hasOne(Tb_kec::class, 'kec_id');
    }
}
