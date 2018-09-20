<?php

namespace App\Http\Controllers\Setup;

use App\Services\Setup\KelurahanService;
use Illuminate\Routing\Controller;

class KelurahanController extends Controller
{
    /**
     * @var KelurahanService
     */
    private $kelurahanService;

    /**
     * @param KelurahanService $kelurahanService
     */
    public function __construct(KelurahanService $kelurahanService)
    {
        $this->kelurahanService = $kelurahanService;
    }

    public function index()
    {
        $kelurahans = $this->kelurahanService->all();

        return response()->json($kelurahans);
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