<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_stok';
    protected $fillable = ['id_barang','id_cabang','harga','stok'];
}