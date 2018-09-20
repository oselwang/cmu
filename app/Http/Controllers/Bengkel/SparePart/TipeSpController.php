<?php

namespace App\Http\Controllers\Bengkel\SparePart;

use App\Cmu\Requests\Bengkel\SparePart\Tipe\CreateTipeSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Tipe\DeleteTipeSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Tipe\UpdateTipeSpRequest;
use App\Services\Bengkel\SparePart\TipeSpService;
use Illuminate\Routing\Controller;

class TipeSpController extends Controller
{
    /**
     * @var TipeSpService
     */
    private $tipeSpService;

    /**
     * TipeSpController constructor.
     * @param TipeSpService $tipeSpService
     */
    public function __construct(TipeSpService $tipeSpService)
    {
        $this->tipeSpService = $tipeSpService;
    }

    public function index()
    {
        $tipe_sps = $this->tipeSpService->all();

        return response()->json($tipe_sps);
    }

    public function show($kategori_sp_id)
    {

    }

    public function create(CreateTipeSpRequest $createTipeSpRequest)
    {
        $createTipeSpRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateTipeSpRequest $updateTipeSpRequest)
    {
        $updateTipeSpRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteTipeSpRequest $deleteTipeSpRequest)
    {
        $deleteTipeSpRequest->handle();

        return response()->json(true);
    }
}