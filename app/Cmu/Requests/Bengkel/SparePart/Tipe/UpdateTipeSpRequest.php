<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Tipe;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\TipeSp;

class UpdateTipeSpRequest extends Request
{

    protected $rules = [
        'tipe_sp_id' => 'required',
        'deskripsi'  => 'required',
    ];

    protected $messages = [
        'tipe_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page',
        'deskripsi.required'  => 'Deskripsi harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new TipeSp();
        $kategori_sp = $model->where('id', intval($this->fields('tipe_sp_id')))->first();
        $kategori_sp->deskripsi = $this->fields('deskripsi');
        $kategori_sp->save();

        return true;
    }
}