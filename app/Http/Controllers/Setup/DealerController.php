<?php

namespace App\Http\Controllers\Setup;

use App\Cmu\Requests\Setup\SetSessionDealerRequest;
use App\Services\Setup\DealerService;
use Illuminate\Routing\Controller;

class DealerController extends Controller
{
    /**
     * @var DealerService
     */
    private $dealerService;

    /**
     * DealerController constructor.
     * @param DealerService $dealerService
     */
    public function __construct(DealerService $dealerService)
    {
        $this->dealerService = $dealerService;
    }

    public function index()
    {
        $dealers = $this->dealerService->all();

        return response()->json($dealers);
    }

    public function getByLoggedInUser()
    {
        $dealers = $this->dealerService->getByLoggedInUser();

        return response()->json($dealers);
    }

    public function setSession(SetSessionDealerRequest $sessionDealerRequest)
    {
        $sessionDealerRequest->handle();

        return response()->json(true);
    }
}