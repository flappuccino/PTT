<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = "table_user";
    protected $primaryKey = "id_user";
    protected $fillable = [
       'nama_produk', 'harga', 'jml_unit', 'tipe_kamar', 'gambar', 'deskripsi', 'id_user',
    ];
}
