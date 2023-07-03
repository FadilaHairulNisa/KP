<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProduksi extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'nama_perusahaan',
        'alamat',
        'produk',
        // 'kategori_industri',
        'thn_komersil'
    ];
    protected $table = 'tb_status_produksi';

    public function desa()
    {
        return $this->belongsTo(Tb_desa::class, 'id_desa', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Tb_kategori::class, 'id_kategori', 'id');
    }
}
