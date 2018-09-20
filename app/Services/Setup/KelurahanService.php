<?php

namespace App\Services\Setup;


use App\Models\Kelurahan;

class KelurahanService
{
    /**
     * @var Kelurahan
     */
    private $kelurahan;

    /**
     * @param Kelurahan $kelurahan
     */
    public function __construct(Kelurahan $kelurahan)
    {

        $this->kelurahan = $kelurahan;
    }

    public function all()
    {
        return $this->kelurahan->orderBy('nama','asc')->get();
    }
}