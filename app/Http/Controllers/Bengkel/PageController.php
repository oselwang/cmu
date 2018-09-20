<?php

namespace App\Http\Controllers\Bengkel;

use App\Services\Bengkel\CustomerBengkelService;
use App\Services\Bengkel\DetailJasaService;
use App\Services\Bengkel\JenisBukuService;
use App\Services\Bengkel\SparePart\CodeSpService;
use App\Services\Bengkel\SparePart\DetailSpService;
use App\Services\Bengkel\SparePart\KategoriSpService;
use App\Services\Bengkel\SparePart\PenjualanSpService;
use App\Services\Bengkel\SparePart\TipeSpService;
use App\Services\Bengkel\TipeJasaService;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    /**
     * @var JenisBukuService
     */
    private $jenisBukuService;
    /**
     * @var CustomerBengkelService
     */
    private $customerBengkelService;
    /**
     * @var TipeJasaService
     */
    private $tipeJasaService;
    /**
     * @var DetailJasaService
     */
    private $detailJasaService;
    /**
     * @var KategoriSpService
     */
    private $kategoriSpService;
    /**
     * @var TipeSpService
     */
    private $tipeSpService;
    /**
     * @var CodeSpService
     */
    private $codeSpService;
    /**
     * @var DetailSpService
     */
    private $detailSpService;
    /**
     * @var PenjualanSpService
     */
    private $penjualanSpService;

    /**
     * PageController constructor.
     * @param JenisBukuService $jenisBukuService
     * @param CustomerBengkelService $customerBengkelService
     * @param TipeJasaService $tipeJasaService
     * @param DetailJasaService $detailJasaService
     * @param KategoriSpService $kategoriSpService
     * @param TipeSpService $tipeSpService
     * @param CodeSpService $codeSpService
     * @param DetailSpService $detailSpService
     * @param PenjualanSpService $penjualanSpService
     */
    public function __construct(JenisBukuService $jenisBukuService, CustomerBengkelService $customerBengkelService, TipeJasaService $tipeJasaService,
                                DetailJasaService $detailJasaService, KategoriSpService $kategoriSpService, TipeSpService $tipeSpService,
                                CodeSpService $codeSpService, DetailSpService $detailSpService, PenjualanSpService $penjualanSpService)
    {
        $this->jenisBukuService = $jenisBukuService;
        $this->customerBengkelService = $customerBengkelService;
        $this->tipeJasaService = $tipeJasaService;
        $this->detailJasaService = $detailJasaService;
        $this->kategoriSpService = $kategoriSpService;
        $this->tipeSpService = $tipeSpService;
        $this->codeSpService = $codeSpService;
        $this->detailSpService = $detailSpService;
        $this->penjualanSpService = $penjualanSpService;
    }

    public function jenisBuku()
    {
        $jenis_bukus = $this->jenisBukuService->all();
        return view('bengkel.jenis_buku', compact('jenis_bukus'));
    }

    public function customerBengkel()
    {
        $customer_bengkels = $this->customerBengkelService->all();

        return view('bengkel.customer_bengkel', compact('customer_bengkels'));
    }

    public function tipeJasa()
    {
        $tipe_jasas = $this->tipeJasaService->all();

        return view('bengkel.tipe_jasa', compact('tipe_jasas'));
    }

    public function detailJasa()
    {
        $detail_jasas = $this->detailJasaService->all();

        return view('bengkel.detail_jasa', compact('detail_jasas'));
    }

    public function kategoriSp()
    {
        $kategori_sps = $this->kategoriSpService->all();

        return view('bengkel.sparepart.kategori_sp', compact('kategori_sps'));
    }

    public function tipeSp()
    {
        $tipe_sps = $this->tipeSpService->all();

        return view('bengkel.sparepart.tipe_sp', compact('tipe_sps'));
    }

    public function codeSp()
    {
        $code_sps = $this->codeSpService->all();

        return view('bengkel.sparepart.code_sp', compact('code_sps'));
    }

    public function detailSp()
    {
        $detail_sps = $this->detailSpService->all();

        return view('bengkel.sparepart.detail_sp', compact('detail_sps'));
    }

    public function penjualanSp()
    {
        $penjualan_sps = $this->penjualanSpService->all();

        return view('bengkel.sparepart.penjualan_sp', compact('penjualan_sps'));
    }

    public function createPenjualanSp()
    {
        return view('bengkel.sparepart.view.create_penjualan_sp');
    }
}