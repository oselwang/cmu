<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Tipe;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\TipeSp;

class DeleteTipeSpRequest extends Request
{

    protected $rules = [
        'tipe_sp_id' => 'required'
    ];

    protected $messages = [
        'tipe_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();
        $model = new TipeSp();
        $model->where('id', intval($this->request->get('tipe_sp_id')))->delete();

        return true;
    }
}