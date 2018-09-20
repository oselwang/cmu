<?php

namespace App\Cmu\Requests\Bengkel\CustomerBengkel;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\CustomerBengkel;

class DeleteCustomerBengkelRequest extends Request
{

    protected $rules = [
        'customer_bengkel_id' => 'required'
    ];

    protected $messages = [
        'customer_bengkel_id.required' => 'Refresh kembali halaman'
    ];

    public function handle()
    {
        $this->isValid();

        $model = new CustomerBengkel();

        $model->where('id', intval($this->fields('customer_bengkel_id')))->delete();

        return true;
    }
}