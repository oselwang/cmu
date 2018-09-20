<?php

namespace App\Http\Controllers\Bengkel;

use App\Cmu\Requests\Bengkel\JenisBuku\CreateJenisBukuRequest;
use App\Cmu\Requests\Bengkel\JenisBuku\DeleteJenisBukuRequest;
use App\Cmu\Requests\Bengkel\JenisBuku\UpdateJenisBukuRequest;
use App\Services\Bengkel\JenisBukuService;
use Illuminate\Routing\Controller;

class JenisBukuController extends Controller
{
    /**
     * @var JenisBukuService
     */
    private $jenisBukuService;

    /**
     * JenisBukuController constructor.
     * @param JenisBukuService $jenisBukuService
     */
    public function __construct(JenisBukuService $jenisBukuService)
    {
        $this->jenisBukuService = $jenisBukuService;
        $this->middleware('action.update', ['only' => 'update']);
        $this->middleware('action.create', ['only' => 'create']);
        $this->middleware('action.delete', ['only' => 'delete']);
    }

    public function index()
    {
        $jenis_bukus = $this->jenisBukuService->all();

        return response()->json($jenis_bukus);
    }

    public function create(CreateJenisBukuRequest $createJenisBukuRequest)
    {
        $createJenisBukuRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteJenisBukuRequest $deleteJenisBukuRequest)
    {
        $deleteJenisBukuRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateJenisBukuRequest $updateJenisBukuRequest)
    {
        $updateJenisBukuRequest->handle();

        return response()->json(true);
    }
}