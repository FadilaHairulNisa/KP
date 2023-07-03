<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_kec extends Model
{
    use HasFactory;
    
    public $table = 'tb_kec';
    public $fillable = ['kode_kec', 'nama_kec', 'id_kab'];
    protected $timeStampe = false;
    protected $updated_at = null;
    protected $created_at = null;

    public function kabupaten()
    {
        return $this->belongsTo(Tb_kab_kota::class, 'id_kab');
    }
}
