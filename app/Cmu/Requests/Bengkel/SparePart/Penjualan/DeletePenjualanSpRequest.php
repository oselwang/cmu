<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Penjualan;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\PenjualanSp;
use App\Models\Bengkel\PenjualanSpDetail;

class DeletePenjualanSpRequest extends Request
{

    protected $rules = [
        'penjualan_sp_id' => 'required'
    ];

    protected $messages = [
        'penjualan_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page'
    ];

    public function handle()
    {
        $this->isValid();
        $model = new PenjualanSp();
        $penjualan_detail_model = new PenjualanSpDetail();
        $penjualan_detail_model->where('penjualan_sp_id', $this->fields('penjualan_sp_id'))->delete();
        $model->where('id', intval($this->request->get('penjualan_sp_id')))->delete();

        return true;
    }
}