<?php

namespace App\Cmu\Requests\Bengkel\Jasa;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\TipeJasa;

class DeleteTipeJasaRequest extends Request
{

    protected $rules = [
        'tipe_jasa_id' => 'required'
    ];

    protected $messages = [
        'tipe_jasa_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();

        $model = new TipeJasa();
        $model->where('id', intval($this->request->get('tipe_jasa_id')))->delete();

        return true;
    }
}