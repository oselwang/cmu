<?php

namespace App\Http\Controllers\Bengkel;

use App\Cmu\Requests\Bengkel\Jasa\CreateTipeJasaRequest;
use App\Cmu\Requests\Bengkel\Jasa\DeleteTipeJasaRequest;
use App\Cmu\Requests\Bengkel\Jasa\UpdateTipeJasaRequest;
use App\Services\Bengkel\TipeJasaService;
use Illuminate\Routing\Controller;

class TipeJasaController extends Controller
{
    /**
     * @var TipeJasaService
     */
    private $tipeJasaService;

    /**
     * TipeJasaController constructor.
     * @param TipeJasaService $tipeJasaService
     */
    public function __construct(TipeJasaService $tipeJasaService)
    {
        $this->tipeJasaService = $tipeJasaService;
    }

    public function index()
    {
        $tipe_jasas = $this->tipeJasaService->all();

        return response()->json($tipe_jasas);
    }

    public function create(CreateTipeJasaRequest $createTipeJasaRequest)
    {
        $createTipeJasaRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateTipeJasaRequest $updateTipeJasaRequest)
    {
        $updateTipeJasaRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteTipeJasaRequest $deleteTipeJasaRequest)
    {
        $deleteTipeJasaRequest->handle();

        return response()->json(true);
    }
}