<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_desa extends Model
{
    use HasFactory;
    public $table = 'tb_desa';
    public $fillable = ['kode_desa', 'nama_desa'];
    protected $timeStampe = false;
    protected $updated_at = null;
    protected $created_at = null;

    // public function kecamatan() 
    // {
    //     return $this->belongsTo(Tb_kec::class, 'kec_id');
    // }
}
