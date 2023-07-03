<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_kab_kota extends Model
{
    use HasFactory;
    public $table = 'tb_kab_kota';
    public $fillable = ['kode_kab', 'nama_kab'];
    public $timestamps = false;
    protected $updated_at = null;
    protected $created_at = null;

    public function kec()
    {
        return $this->belongsTo(Tb_kec::class);
    }

}
