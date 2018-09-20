<?php

namespace App\Services\Bengkel\SparePart;

use App\Models\Bengkel\CodeSp;

class CodeSpService
{
    /**
     * @var CodeSp
     */
    private $codeSp;

    /**
     * CodeSpService constructor.
     * @param CodeSp $codeSp
     */
    public function __construct(CodeSp $codeSp)
    {
        $this->codeSp = $codeSp;
    }

    public function all()
    {
        $code_sps = $this->codeSp->orderBy('id', 'asc')->with(['kategori_sp', 'tipe_sp'])->get();

        return $code_sps;
    }
}