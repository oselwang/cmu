<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $fillable = ['nick', 'deskripsi'];

    protected $table = 'warna';
}
