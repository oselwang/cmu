<?php

namespace App\Services\Bengkel;

use App\Models\Bengkel\TipeJasa;

class TipeJasaService
{
    /**
     * @var TipeJasa
     */
    private $tipeJasa;

    /**
     * TipeJasaService constructor.
     * @param TipeJasa $tipeJasa
     */
    public function __construct(TipeJasa $tipeJasa)
    {
        $this->tipeJasa = $tipeJasa;
    }

    public function all()
    {
        $tipe_jasas = $this->tipeJasa->orderBy('id', 'asc')->get();

        return $tipe_jasas;
    }
}