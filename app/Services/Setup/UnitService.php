<?php

namespace App\Services\Setup;


use App\Models\Unit;

class UnitService
{
    /**
     * @var Unit
     */
    private $unit;

    /**
     * @param Unit $unit
     */
    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

    public function all()
    {
        return $this->unit->orderBy('nick', 'asc')->get();
    }
}