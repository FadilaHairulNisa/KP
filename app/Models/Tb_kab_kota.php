<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_kab_kota extends Model
{
    use HasFactory;
    public $table = 'tb_kab_kota';
    public $fillable = ['kode_kab', 'nama_kab'];
    protected $timeStampe = false;
    protected $updated_at = null;
    protected $created_at = null;

    // public function kecamatan() 
    // // {
    // //     return $this->belongsTo(Tb_kec::class, 'kec_id');
    // // }

    // // public function desa()
    // // {
    // //     return $this->hasMany(Tb_desa::class, 'kec_id');
    // // }

}
