<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_desa extends Model
{
    use HasFactory;
    public $table = 'tb_desa';
    public $fillable = ['kode_desa', 'nama_desa'];
    public $timestamps = false;
    protected $updated_at = null;
    protected $created_at = null;

    public function kec()
    {
        return $this->belongsTo(Tb_kec::class, 'id_kec', 'id');
    }

    public function kab()
    {
        return $this->belongsTo(Tb_kab_kota::class, 'id_kab', 'id');
    }
}
