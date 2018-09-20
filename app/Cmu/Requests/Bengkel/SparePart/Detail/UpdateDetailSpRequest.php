<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Detail;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailSp;

class UpdateDetailSpRequest extends Request
{

    protected $rules = [
        'detail_sp_id' => 'required',
        'nama'         => 'required',
        'stock'        => 'required|numeric',
        'status'       => 'required',
        'harga_beli'   => 'required|numeric',
        'harga_jual'   => 'required|numeric',
    ];

    protected $messages = [
        'detail_sp_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page',
        'nama.required'         => 'Nama harus diisi',
        'stock.required'        => 'Stock harus diisi',
        'stock.numeric'         => 'Stock harus angka',
        'status.required'       => 'Status harus diisi',
        'harga_beli.required'   => 'Harga beli harus diisi',
        'harga_jual.required'   => 'Harga jual harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new DetailSp();
        $detail_sp = $model->where('id', intval($this->fields('detail_sp_id')))->first();
        $detail_sp->nama = $this->fields('nama');
        $detail_sp->stock = $this->fields('stock');
        $detail_sp->status = $this->fields('status');
        $detail_sp->harga_beli = $this->fields('harga_beli');
        $detail_sp->harga_jual = $this->fields('harga_jual');
        $detail_sp->kategori_sp_id = $this->fields('kategori_sp_id');
        $detail_sp->tipe_sp_id = $this->fields('tipe_sp_id');
        $detail_sp->save();

        return true;
    }
}