<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class DetailJasa extends Model
{
    protected $fillable = ['tipe_jasa_id', 'deskripsi', 'estimasi_jam', 'estimasi_menit', 'estimasi_detik', 'harga', 'status'];

    protected $table = 'detail_jasa_bengkel';

    public function tipe_jasa()
    {
        return $this->belongsTo(TipeJasa::class);
    }
}