<?php

namespace App\Cmu\Requests\Bengkel\JenisBuku;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\JenisBuku;

class UpdateJenisBukuRequest extends Request
{

    protected $rules = [
        'jenis_buku_id' => 'required',
        'deskripsi'     => 'required',
        'total_kartu'   => 'required',
        'total_oli'     => 'required',
        'harga'         => 'required|numeric'
    ];

    protected $messages = [
        'jenis_buku_id.required' => 'Terjadi kesalahan pada sistem. Coba refresh page',
        'deskripsi.required'     => 'Deskripsi harus diisi',
        'total_kartu.required'   => 'Total kartu harus diisi',
        'total_oli.required'     => 'Total oli harus diisi',
        'harga.required'         => 'Harga harus diisi',
        'harga.numeric'          => 'Harga harus angka'
    ];

    public function handle()
    {
        $this->isValid();

        $model = new JenisBuku();
        $jenis_buku = $model->where('id', $this->fields('jenis_buku_id'))->first();
        $jenis_buku->deskripsi = $this->fields('deskripsi');
        $jenis_buku->total_kartu = $this->fields('total_kartu');
        $jenis_buku->total_oli = $this->fields('total_oli');
        $jenis_buku->harga = $this->fields('harga');
        $jenis_buku->save();

        return true;
    }
}