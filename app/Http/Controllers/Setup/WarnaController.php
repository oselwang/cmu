<?php

namespace App\Http\Controllers\Setup;


use App\Services\Setup\WarnaService;
use Illuminate\Routing\Controller;

class WarnaController extends Controller
{
    /**
     * @var WarnaService
     */
    private $warnaService;

    /**
     * WarnaController constructor.
     * @param WarnaService $warnaService
     */
    public function __construct(WarnaService $warnaService)
    {
        $this->warnaService = $warnaService;
    }

    public function index()
    {
        $warnas = $this->warnaService->all();

        return response()->json($warnas);
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