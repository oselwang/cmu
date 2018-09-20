<?php

namespace App\Cmu\Requests\Bengkel\Jasa;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\TipeJasa;

class UpdateTipeJasaRequest extends Request
{

    protected $rules = [
        'tipe_jasa_id' => 'required',
        'deskripsi'    => 'required',
    ];

    protected $messages = [
        'tipe_jasa_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page',
        'deskripsi.required'    => 'Deskripsi harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new TipeJasa();
        $tipe_jasa = $model->where('id', $this->fields('tipe_jasa_id'))->first();
        $tipe_jasa->deskripsi = $this->fields('deskripsi');
        $tipe_jasa->save();

        return true;
    }
}