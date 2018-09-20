<?php

namespace App\Http\Controllers\Bengkel;

use App\Cmu\Requests\Bengkel\CustomerBengkel\CreateCustomerBengkelRequest;
use App\Cmu\Requests\Bengkel\CustomerBengkel\DeleteCustomerBengkelRequest;
use App\Cmu\Requests\Bengkel\CustomerBengkel\UpdateCustomerBengkelRequest;
use App\Services\Bengkel\CustomerBengkelService;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class CustomerBengkelController extends Controller
{
    /**
     * @var CustomerBengkelService
     */
    private $customerBengkelService;

    /**
     * CustomerBengkelController constructor.
     * @param CustomerBengkelService $customerBengkelService
     */
    public function __construct(CustomerBengkelService $customerBengkelService)
    {
        $this->customerBengkelService = $customerBengkelService;
    }

    public function index()
    {
    }

    public function create(CreateCustomerBengkelRequest $createCustomerBengkelRequest)
    {
        $createCustomerBengkelRequest->handle();

        return response()->json(true);
    }

    public function show($customer_bengkel_id)
    {
        $customer_bengkel = $this->customerBengkelService->getById($customer_bengkel_id);
        $customer_bengkel->stnk_expiry_date = Carbon::parse($customer_bengkel->stnk_expiry_date)->toDateString();

        return response()->json($customer_bengkel);
    }

    public function getByPhone($phone)
    {
        $customer_bengkel = $this->customerBengkelService->getByPhone($phone);
        if (!empty($customer_bengkel)) {
            $customer_bengkel->stnk_expiry_date = Carbon::parse($customer_bengkel->stnk_expiry_date)->toDateString();
        }

        return response()->json($customer_bengkel);
    }

    public function update(UpdateCustomerBengkelRequest $updateCustomerBengkelRequest)
    {
        $updateCustomerBengkelRequest->handle();

        return response()->json(true);
    }

    public function delete(DeleteCustomerBengkelRequest $deleteCustomerBengkelRequest)
    {
        $deleteCustomerBengkelRequest->handle();

        return response()->json(true);
    }
}