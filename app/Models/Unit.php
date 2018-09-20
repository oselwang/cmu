<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['nick', 'deskripsi'];

    protected $table = 'unit';
}
