<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class PenjualanSpDetail extends Model
{
    protected $fillable = ['detail_sp_id', 'penjualan_sp_id', 'harga', 'subtotal', 'qty'];

    protected $table = 'penjualan_sp_detail_bengkel';
}
