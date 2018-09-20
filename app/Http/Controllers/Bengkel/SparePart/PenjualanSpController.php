<?php

namespace App\Http\Controllers\Bengkel\SparePart;

use App\Cmu\Requests\Bengkel\SparePart\Penjualan\CreatePenjualanSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Penjualan\DeletePenjualanSpRequest;
use App\Services\Bengkel\SparePart\PenjualanSpService;
use Illuminate\Routing\Controller;

class PenjualanSpController extends Controller
{
    /**
     * @var PenjualanSpService
     */
    private $penjualanSpService;

    /**
     * PenjualanSpController constructor.
     * @param PenjualanSpService $penjualanSpService
     */
    public function __construct(PenjualanSpService $penjualanSpService)
    {
        $this->penjualanSpService = $penjualanSpService;
        $this->middleware('action.update', ['only' => 'update']);
        $this->middleware('action.create', ['only' => 'create']);
        $this->middleware('action.delete', ['only' => 'delete']);
    }

    public function index()
    {
        $penjualan_sps = $this->penjualanSpService->all();

        return response()->json($penjualan_sps);
    }

    public function show($penjualan_sp_id)
    {
        $penjualan_sp = $this->penjualanSpService->getByID($penjualan_sp_id);

        return view('bengkel.sparepart.view.penjualan_sp', compact('penjualan_sp'));
    }

    public function create(CreatePenjualanSpRequest $createPenjualanSpRequest)
    {
        \DB::transaction(function () use ($createPenjualanSpRequest) {
            return $createPenjualanSpRequest->handle();
        });

        return response()->json(true);
    }

    public function update()
    {


        return response()->json(true);
    }

    public function delete(DeletePenjualanSpRequest $deletePenjualanSpRequest)
    {

        $deletePenjualanSpRequest->handle();

        return response()->json(true);
    }
}