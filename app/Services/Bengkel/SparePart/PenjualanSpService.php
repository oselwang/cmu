<?php

namespace App\Services\Bengkel\SparePart;

use App\Models\Bengkel\PenjualanSp;

class PenjualanSpService
{
    /**
     * @var PenjualanSp
     */
    private $penjualanSp;

    /**
     * PenjualanSpService constructor.
     * @param PenjualanSp $penjualanSp
     */
    public function __construct(PenjualanSp $penjualanSp)
    {
        $this->penjualanSp = $penjualanSp;
    }

    public function all()
    {
        $penjualan_sps = $this->penjualanSp->orderBy('id', 'desc')->with(['customer_bengkel', 'user', 'detail_sp'])
            ->whereHas('dealer', function ($query) {
                $query->where('id', \Session::get('dealer_id'));
            })->get();

        return $penjualan_sps;
    }

    public function getByID($penjualan_sp_id)
    {
        $penjualan_sp = $this->penjualanSp->where('id', intval($penjualan_sp_id))->with(['customer_bengkel', 'user', 'detail_sp'])->first();

        return $penjualan_sp;
    }
}