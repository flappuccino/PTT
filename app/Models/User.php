<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "table_user";
    protected $primaryKey = "id_user";
    protected $fillable = [
       'nama', 'password', 'username', 'no_tlpn', 'email', 'role',
    ];
}
