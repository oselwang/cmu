<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    protected $fillable = ['total_kartu', 'total_oli', 'deskripsi', 'harga'];

    protected $table = 'jenis_buku';
}
