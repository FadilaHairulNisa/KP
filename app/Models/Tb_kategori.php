<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_kategori extends Model
{
    use HasFactory;

    public $table = 'table_kategori';
    public $fillable = ['nama_kategori'];
    protected $timeStampe = false;
    protected $updated_at = null;
    protected $created_at = null;
}
