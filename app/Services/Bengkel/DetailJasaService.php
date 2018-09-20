<?php

namespace App\Services\Bengkel;

use App\Models\Bengkel\DetailJasa;

class DetailJasaService
{
    /**
     * @var Detailjasa
     */
    private $detailjasa;

    /**
     * DetailJasaService constructor.
     * @param Detailjasa $detailjasa
     */
    public function __construct(DetailJasa $detailjasa)
    {
        $this->detailjasa = $detailjasa;
    }

    public function all()
    {
        $detail_jasas = $this->detailjasa->with('tipe_jasa')->orderBy('id', 'asc')->get();

        return $detail_jasas;
    }

    public function getById($id)
    {
        $detail_jasa = $this->detailjasa->where('id', $id)->with('tipe_jasa')->first();

        return $detail_jasa;
    }
}