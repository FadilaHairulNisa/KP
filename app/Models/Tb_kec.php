<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_kec extends Model
{
    use HasFactory;
    public $table = 'tb_kec';
    public $fillable = ['kode_kec', 'nama_kec'];
    protected $timeStampe = false;
    protected $updated_at = null;
    protected $created_at = null;

    // public function desa()
    // {
    //     return $this->hasMany(Tb_desa::class, 'kec_id');
    // }
}
