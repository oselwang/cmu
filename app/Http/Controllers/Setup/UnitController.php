<?php

namespace App\Http\Controllers\Setup;

use App\Services\Setup\UnitService;
use Illuminate\Routing\Controller;

class UnitController extends Controller
{
    /**
     * @var UnitService
     */
    private $unitService;

    /**
     * @param UnitService $unitService
     */
    public function __construct(UnitService $unitService)
    {

        $this->unitService = $unitService;
    }

    public function index()
    {
        $units = $this->unitService->all();

        return response()->json($units);
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}