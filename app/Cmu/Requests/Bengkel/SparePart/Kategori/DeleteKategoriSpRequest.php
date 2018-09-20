<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Kategori;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\KategoriSp;

class DeleteKategoriSpRequest extends Request
{

    protected $rules = [
        'kategori_sp_id' => 'required'
    ];

    protected $messages = [
        'kategori_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();
        $model = new KategoriSp();
        $model->where('id', intval($this->request->get('kategori_sp_id')))->delete();

        return true;
    }
}