<?php

namespace App\Http\Controllers\Bengkel;

use App\Cmu\Requests\Bengkel\Jasa\CreateDetailJasaRequest;
use App\Cmu\Requests\Bengkel\Jasa\DeleteDetailJasaRequest;
use App\Cmu\Requests\Bengkel\Jasa\UpdateDetailJasaRequest;
use App\Cmu\Requests\Bengkel\Jasa\UpdateTipeJasaRequest;
use App\Services\Bengkel\DetailJasaService;
use Illuminate\Routing\Controller;

class DetailJasaController extends Controller
{
    /**
     * @var DetailJasaService
     */
    private $detailJasaService;

    /**
     * DetailJasaController constructor.
     * @param DetailJasaService $detailJasaService
     */
    public function __construct(DetailJasaService $detailJasaService)
    {
        $this->detailJasaService = $detailJasaService;
    }

    public function index()
    {
        $detail_jasas = $this->detailJasaService->all();

        return response()->json($detail_jasas);
    }

    public function show($detail_jasa_id)
    {
        $detail_jasa = $this->detailJasaService->getById($detail_jasa_id);

        return response()->json($detail_jasa);
    }

    public function create(CreateDetailJasaRequest $createDetailJasaRequest)
    {
        $createDetailJasaRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateDetailJasaRequest $updateDetailJasaRequest)
    {
        $updateDetailJasaRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteDetailJasaRequest $deleteDetailJasaRequest)
    {
        $deleteDetailJasaRequest->handle();

        return response()->json(true);
    }
}