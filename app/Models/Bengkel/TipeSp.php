<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class TipeSp extends Model
{
    protected $fillable = ['deskripsi'];

    protected $table = 'tipe_sp_bengkel';
}
