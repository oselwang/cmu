<?php

namespace App\Cmu\Requests\Bengkel\JenisBuku;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\JenisBuku;

class CreateJenisBukuRequest extends Request
{

    protected $rules = [
        'deskripsi'     => 'required',
        'total_kartu'   => 'required',
        'total_oli'     => 'required',
        'harga'         => 'required|numeric'
    ];

    protected $messages = [
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
        $model->create([
            'deskripsi'   => $this->fields('deskripsi'),
            'total_kartu' => $this->fields('total_kartu'),
            'total_oli'   => $this->fields('total_oli'),
            'harga'       => $this->fields('harga')
        ]);

        return true;
    }
}