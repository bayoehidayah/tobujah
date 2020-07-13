<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
    protected $table = "user_details";
    protected $fillable = [ "user_id", "tgl_lahir", "jen_kel", "foto_profil"];
}
