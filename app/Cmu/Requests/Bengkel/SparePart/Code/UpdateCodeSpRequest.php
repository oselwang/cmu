<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Code;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\CodeSp;

class UpdateCodeSpRequest extends Request
{

    protected $rules = [
        'code_sp_id' => 'required',
        'deskripsi'  => 'required',
        'identifier' => 'required',
        'status'     => 'required',
    ];

    protected $messages = [
        'code_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page',
        'deskripsi.required'  => 'Deskripsi harus diisi',
        'identifier.required' => 'ID harus diisi',
        'status.required'     => 'Status harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new CodeSp();
        $code_sp = $model->where('id', intval($this->fields('code_sp_id')))->first();
        $code_sp->deskripsi = $this->fields('deskripsi');
        $code_sp->identifier = $this->fields('identifier');
        $code_sp->subtitute = $this->fields('subtitute');
        $code_sp->kategori_sp_id = $this->fields('kategori_sp_id');
        $code_sp->tipe_sp_id = $this->fields('tipe_sp_id');
        $code_sp->save();

        return true;
    }
}