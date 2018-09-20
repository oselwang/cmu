<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Detail;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailSp;

class DeleteDetailSpRequest extends Request
{

    protected $rules = [
        'detail_sp_id' => 'required'
    ];

    protected $messages = [
        'detail_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();
        $model = new DetailSp();
        $model->where('id', intval($this->request->get('detail_sp_id')))->delete();

        return true;
    }
}