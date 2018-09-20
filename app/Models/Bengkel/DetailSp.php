<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class DetailSp extends Model
{
    protected $fillable = ['kategori_sp_id', 'tipe_sp_id', 'harga_beli', 'harga_jual', 'stock', 'nama', 'status', 'code'];

    protected $table = 'detail_sp_bengkel';

    public function tipe_sp()
    {
        return $this->belongsTo(TipeSp::class);
    }

    public function kategori_sp()
    {
        return $this->belongsTo(KategoriSp::class);
    }

    public function penjualan_sp()
    {
        return $this->belongsToMany(PenjualanSp::class);
    }
}
