<?php

namespace App\Services\Setup;

use App\Models\Warna;

class WarnaService
{
    /**
     * @var Warna
     */
    private $warna;

    /**
     * WarnaService constructor.
     * @param Warna $warna
     */
    public function __construct(Warna $warna)
    {
        $this->warna = $warna;
    }

    public function all()
    {
        return $this->warna->orderBy('nick', 'asc')->get();
    }
}