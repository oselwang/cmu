<?php

namespace App\Cmu\Requests\Setup;

use App\Cmu\Requests\Request;

class SetSessionDealerRequest extends Request
{

    protected $rules = [
        'dealer_id' => 'required'
    ];

    protected $messages = [
        'dealer_id.required' => 'Mohon refresh kembali halaman ini.'
    ];

    public function handle()
    {
        $this->isValid();

        \Session::set('dealer_id', intval($this->fields('dealer_id')));

        return true;
    }
}