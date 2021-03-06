<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "table_produk";
    protected $primaryKey = "id_produk";
    protected $fillable = [
       'nama_produk', 'harga', 'jml_unit', 'tipe_kamar', 'gambar', 'deskripsi', 'id_user',
    ];
}
