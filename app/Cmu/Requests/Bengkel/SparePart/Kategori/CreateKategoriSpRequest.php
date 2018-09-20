<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Kategori;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\KategoriSp;

class CreateKategoriSpRequest extends Request
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

        $model = new KategoriSp();
        $model->create([
            'deskripsi' => $this->fields('deskripsi'),
        ]);

        return true;
    }
}