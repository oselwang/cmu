<?php

namespace App\Models\Bengkel;

use App\Models\Dealer;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class PenjualanSp extends Model
{
    protected $fillable = ['customer_bengkel_id', 'user_id', 'total_harga', 'ref_no', 'ref_date', 'qty'];

    protected $table = 'penjualan_sp_bengkel';

    public function detail_sp()
    {
        return $this->belongsToMany(DetailSp::class, 'penjualan_sp_detail_bengkel')->withPivot(['harga', 'subtotal', 'qty']);
    }

    public function customer_bengkel()
    {
        return $this->belongsTo(CustomerBengkel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }
}
