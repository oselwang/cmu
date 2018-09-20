<?php

namespace App\Cmu\Requests\Bengkel\Jasa;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\TipeJasa;

class CreateTipeJasaRequest extends Request
{

    protected $rules = [
        'deskripsi' => 'required',

    ];

    protected $messages = [
        'deskripsi.required' => 'Deskripsi harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new TipeJasa();
        $model->create([
            'deskripsi' => $this->fields('deskripsi'),
        ]);

        return true;
    }
}