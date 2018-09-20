<?php

namespace App\Services\Bengkel;

use App\Models\Bengkel\JenisBuku;

class JenisBukuService
{
    /**
     * @var JenisBuku
     */
    private $jenisBuku;

    /**
     * JenisBukuService constructor.
     * @param JenisBuku $jenisBuku
     */
    public function __construct(JenisBuku $jenisBuku)
    {
        $this->jenisBuku = $jenisBuku;
    }

    public function all()
    {
        return $this->jenisBuku->all();
    }
}