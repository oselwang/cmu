<?php

namespace App\Cmu\Requests\Bengkel\JenisBuku;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\JenisBuku;

class DeleteJenisBukuRequest extends Request
{

    protected $rules = [
        'jenis_buku_id' => 'required'
    ];

    protected $messages = [
        'jenis_buku_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();

        $model = new JenisBuku();
        $model->where('id', $this->request->get('jenis_buku_id'))->delete();

        return true;
    }
}