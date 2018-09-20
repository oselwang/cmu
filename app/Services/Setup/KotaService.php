<?php

namespace App\Services\Setup;

use App\Models\Kota;

class KotaService
{
    /**
     * @var Kota
     */
    private $kota;

    /**
     * JenisBukuService constructor.
     * @param Kota $kota
     */
    public function __construct(Kota $kota)
    {

        $this->kota = $kota;
    }

    public function all()
    {
        return $this->kota->orderBy('nama','asc')->get();
    }
}