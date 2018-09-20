<?php

namespace App\Http\Controllers\Setup;

use App\Services\Setup\KecamatanService;
use Illuminate\Routing\Controller;

class KecamatanController extends Controller
{
    /**
     * @var KecamatanService
     */
    private $kecamatanService;

    /**
     * @param KecamatanService $kecamatanService
     * @internal param KelurahanService $kelurahanService
     */
    public function __construct(KecamatanService $kecamatanService)
    {

        $this->kecamatanService = $kecamatanService;
    }

    public function index()
    {
        $kecamatans = $this->kecamatanService->all();

        return response()->json($kecamatans);
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