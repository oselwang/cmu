<?php

namespace App\Services\Bengkel\SparePart;

use App\Models\Bengkel\TipeSp;

class TipeSpService
{
    /**
     * @var TipeSp
     */
    private $tipeSp;

    /**
     * TipeSpService constructor.
     * @param TipeSp $tipeSp
     */
    public function __construct(TipeSp $tipeSp)
    {
        $this->tipeSp = $tipeSp;
    }

    public function all()
    {
        $tipe_sps = $this->tipeSp->orderBy('id', 'asc')->get();

        return $tipe_sps;
    }
}