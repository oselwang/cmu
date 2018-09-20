<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class KategoriSp extends Model
{
    protected $fillable = ['deskripsi'];

    protected $table = 'kategori_sp_bengkel';
}
