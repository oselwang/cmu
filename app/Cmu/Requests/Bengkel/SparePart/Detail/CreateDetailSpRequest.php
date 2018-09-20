<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Detail;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailSp;

class CreateDetailSpRequest extends Request
{

    protected $rules = [
        'nama'       => 'required',
        'stock'      => 'required|numeric',
        'status'     => 'required',
        'harga_beli' => 'required|numeric',
        'harga_jual' => 'required|numeric',

    ];

    protected $messages = [
        'nama.required'       => 'Nama harus diisi',
        'stock.required'      => 'Stock harus diisi',
        'stock.numeric'       => 'Stock harus angka',
        'status.required'     => 'Status harus diisi',
        'harga_beli.required' => 'Harga beli harus diisi',
        'harga_jual.required' => 'Harga jual harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new DetailSp();
        $model->create([
            'nama'           => $this->fields('nama'),
            'stock'          => $this->fields('stock'),
            'kategori_sp_id' => $this->fields('kategori_sp_id'),
            'tipe_sp_id'     => $this->fields('tipe_sp_id'),
            'status'         => $this->fields('status'),
            'harga_jual'     => $this->fields('harga_jual'),
            'harga_beli'     => $this->fields('harga_beli'),
        ]);

        return true;
    }
}