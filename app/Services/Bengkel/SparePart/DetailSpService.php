<?php

namespace App\Services\Bengkel\SparePart;

use App\Models\Bengkel\DetailSp;

class DetailSpService
{
    /**
     * @var DetailSp
     */
    private $detailSp;


    /**
     * DetailSpService constructor.
     * @param DetailSp $detailSp
     */
    public function __construct(DetailSp $detailSp)
    {
        $this->detailSp = $detailSp;
    }

    public function all()
    {
        $detail_sps = $this->detailSp->orderBy('id', 'asc')->with(['kategori_sp', 'tipe_sp'])->get();

        return $detail_sps;
    }

    public function getByCode($code)
    {
        $detail_sps = $this->detailSp->where('code', $code)->with(['kategori_sp', 'tipe_sp'])->first();

        return $detail_sps;

    }
}