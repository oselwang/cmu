<?php

namespace App\Http\Controllers\Setup;

use App\Services\Setup\KotaService;
use Illuminate\Routing\Controller;

class KotaController extends Controller
{
    /**
     * @var KotaService
     */
    private $kotaService;

    /**
     * KotaController constructor.
     * @param KotaService $kotaService
     */
    public function __construct(KotaService $kotaService)
    {

        $this->kotaService = $kotaService;
    }

    public function index()
    {
        $kotas = $this->kotaService->all();

        return response()->json($kotas);
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