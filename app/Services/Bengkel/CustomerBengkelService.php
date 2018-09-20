<?php

namespace App\Services\Bengkel;

use App\Models\Bengkel\CustomerBengkel;

class CustomerBengkelService
{
    /**
     * @var CustomerBengkel
     */
    private $customerBengkel;

    /**
     * CustomerBengkelService constructor.
     * @param CustomerBengkel $customerBengkel
     */
    public function __construct(CustomerBengkel $customerBengkel)
    {
        $this->customerBengkel = $customerBengkel;
    }

    public function all()
    {
        $customer_bengkels = $this->customerBengkel->where('dealer_id', \Session::get('dealer_id'))->with(['dealer', 'warna', 'unit', 'jenis_buku', 'kota', 'kecamatan', 'kelurahan'])->get();

        return $customer_bengkels;
    }

    public function getById($customer_bengkel_id)
    {
        $customer_bengkel = $this->customerBengkel->where('id', $customer_bengkel_id)->with(['dealer', 'warna', 'unit', 'jenis_buku', 'kota', 'kecamatan', 'kelurahan'])->first();

        return $customer_bengkel;
    }

    public function getByPhone($phone)
    {
        $customer_bengkel = $this->customerBengkel->where('telephone_number', $phone)->with(['dealer', 'warna', 'unit', 'jenis_buku', 'kota', 'kecamatan', 'kelurahan'])->first();
        if (empty($customer_bengkel)) {
            $customer_bengkel = $this->customerBengkel->where('cellphone_number', $phone)->with(['dealer', 'warna', 'unit', 'jenis_buku', 'kota', 'kecamatan', 'kelurahan'])->first();
        }

        return $customer_bengkel;
    }
}