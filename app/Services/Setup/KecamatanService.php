<?php

namespace App\Services\Setup;

use App\Models\Kecamatan;

class KecamatanService
{
    /**
     * @var Kecamatan
     */
    private $kecamatan;

    /**
     * JenisBukuService constructor.
     * @param Kecamatan $kecamatan
     */
    public function __construct(Kecamatan $kecamatan)
    {

        $this->kecamatan = $kecamatan;
    }

    public function all()
    {
        return $this->kecamatan->orderBy('nama', 'asc')->get();
    }
}