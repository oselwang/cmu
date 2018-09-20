<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Tipe;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\TipeSp;

class CreateTipeSpRequest extends Request
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

        $model = new TipeSp();
        $model->create([
            'deskripsi' => $this->fields('deskripsi'),
        ]);

        return true;
    }
}