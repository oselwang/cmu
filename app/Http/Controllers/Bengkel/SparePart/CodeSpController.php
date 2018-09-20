<?php

namespace App\Http\Controllers\Bengkel\SparePart;

use App\Cmu\Requests\Bengkel\SparePart\Code\CreateCodeSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Code\DeleteCodeSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Code\UpdateCodeSpRequest;
use App\Services\Bengkel\SparePart\CodeSpService;
use Illuminate\Routing\Controller;

class CodeSpController extends Controller
{
    /**
     * @var CodeSpService
     */
    private $codeSpService;

    /**
     * CodeSpController constructor.
     * @param CodeSpService $codeSpService
     */
    public function __construct(CodeSpService $codeSpService)
    {
        $this->codeSpService = $codeSpService;
    }

    public function index()
    {
        $code_sps = $this->codeSpService->all();

        return response()->json($code_sps);
    }

    public function show($code_sp_id)
    {

    }

    public function create(CreateCodeSpRequest $createCodeRequest)
    {
        $createCodeRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateCodeSpRequest $updateCodeSpRequest)
    {
        $updateCodeSpRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteCodeSpRequest $deleteCodeSpRequest)
    {
        $deleteCodeSpRequest->handle();

        return response()->json(true);
    }
}