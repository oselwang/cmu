<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Code;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\CodeSp;
use App\Models\Bengkel\KategoriSp;

class CreateCodeSpRequest extends Request
{

    protected $rules = [
        'deskripsi'  => 'required',
        'identifier' => 'required|unique:code_sp_bengkel',
        'status'     => 'required'

    ];

    protected $messages = [
        'deskripsi.required'  => 'Deskripsi harus diisi',
        'identifier.required' => 'ID harus diisi',
        'status.required'     => 'Status harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new CodeSp();
        $model->create([
            'deskripsi'      => $this->fields('deskripsi'),
            'identifier'     => $this->fields('identifier'),
            'kategori_sp_id' => $this->fields('kategori_sp_id'),
            'tipe_sp_id'     => $this->fields('tipe_sp_id'),
            'status'         => $this->fields('status'),
            'subtitute'      => $this->fields('subtitute'),
        ]);

        return true;
    }
}