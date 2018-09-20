<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class TipeJasa extends Model
{
    protected $fillable = ['deskripsi'];

    protected $table = 'tipe_jasa_bengkel';
}
