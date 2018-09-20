<?php

namespace App\Cmu\Requests\Bengkel\Jasa;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailJasa;
use App\Models\Bengkel\TipeJasa;

class DeleteDetailJasaRequest extends Request
{

    protected $rules = [
        'detail_jasa_id' => 'required'
    ];

    protected $messages = [
        'detail_jasa_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();

        $model = new DetailJasa();
        $model->where('id', intval($this->request->get('detail_jasa_id')))->delete();

        return true;
    }
}