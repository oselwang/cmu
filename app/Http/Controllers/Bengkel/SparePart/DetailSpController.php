<?php

namespace App\Http\Controllers\Bengkel\SparePart;

use App\Cmu\Requests\Bengkel\SparePart\Detail\CreateDetailSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Detail\DeleteDetailSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Detail\UpdateDetailSpRequest;
use App\Services\Bengkel\SparePart\DetailSpService;
use Illuminate\Routing\Controller;

class DetailSpController extends Controller
{
    /**
     * @var DetailSpService
     */
    private $detailSpService;

    /**
     * DetailSpController constructor.
     * @param DetailSpService $detailSpService
     */
    public function __construct(DetailSpService $detailSpService)
    {
        $this->detailSpService = $detailSpService;
    }


    public function index()
    {
        $detail_sps = $this->detailSpService->all();

        return response()->json($detail_sps);
    }

    public function show($code_sp_id)
    {

    }

    public function getByCode($code)
    {
        $detail_sps = $this->detailSpService->getByCode($code);

        return response()->json($detail_sps);
    }

    public function create(CreateDetailSpRequest $createDetailSpRequest)
    {
        $createDetailSpRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateDetailSpRequest $updateDetailSpRequest)
    {
        $updateDetailSpRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteDetailSpRequest $deleteDetailSpRequest)
    {
        $deleteDetailSpRequest->handle();

        return response()->json(true);
    }
}