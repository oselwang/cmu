<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Kategori;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\KategoriSp;

class UpdateKategoriSpRequest extends Request
{

    protected $rules = [
        'kategori_sp_id' => 'required',
        'deskripsi'      => 'required',
    ];

    protected $messages = [
        'kategori_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page',
        'deskripsi.required'      => 'Deskripsi harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new KategoriSp();
        $kategori_sp = $model->where('id', intval($this->fields('kategori_sp_id')))->first();
        $kategori_sp->deskripsi = $this->fields('deskripsi');
        $kategori_sp->save();

        return true;
    }
}