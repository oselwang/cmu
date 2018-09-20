<?php

namespace App\Services\Bengkel\SparePart;

use App\Models\Bengkel\KategoriSp;

class KategoriSpService
{
    /**
     * @var KategoriSp
     */
    private $kategoriSp;

    /**
     * KategoriSpService constructor.
     * @param KategoriSp $kategoriSp
     */
    public function __construct(KategoriSp $kategoriSp)
    {
        $this->kategoriSp = $kategoriSp;
    }

    public function all()
    {
        $kategori_sp = $this->kategoriSp->orderBy('id','asc')->get();

        return $kategori_sp;
    }
}