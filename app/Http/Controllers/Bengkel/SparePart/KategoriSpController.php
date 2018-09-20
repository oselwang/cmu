<?php

namespace App\Http\Controllers\Bengkel\SparePart;

use App\Cmu\Requests\Bengkel\SparePart\Kategori\DeleteKategoriSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Kategori\CreateKategoriSpRequest;
use App\Cmu\Requests\Bengkel\SparePart\Kategori\UpdateKategoriSpRequest;
use App\Services\Bengkel\SparePart\KategoriSpService;
use Illuminate\Routing\Controller;

class KategoriSpController extends Controller
{
    /**
     * @var KategoriSpService
     */
    private $kategoriSpService;

    /**
     * KategoriSpController constructor.
     * @param KategoriSpService $kategoriSpService
     */
    public function __construct(KategoriSpService $kategoriSpService)
    {
        $this->kategoriSpService = $kategoriSpService;
    }

    public function index()
    {
        $kategori_sps = $this->kategoriSpService->all();

        return response()->json($kategori_sps);
    }

    public function show($kategori_sp_id)
    {

    }

    public function create(CreateKategoriSpRequest $createKategoriSpRequest)
    {
        $createKategoriSpRequest->handle();

        return response()->json(true);
    }

    public function update(UpdateKategoriSpRequest $updateKategoriSpRequest)
    {
        $updateKategoriSpRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteKategoriSpRequest $deleteKategoriSpRequest)
    {
        $deleteKategoriSpRequest->handle();

        return response()->json(true);
    }
}