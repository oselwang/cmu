<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Code;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\CodeSp;

class DeleteCodeSpRequest extends Request
{

    protected $rules = [
        'code_sp_id' => 'required'
    ];

    protected $messages = [
        'code_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();
        $model = new CodeSp();
        $model->where('id', intval($this->request->get('code_sp_id')))->delete();

        return true;
    }
}