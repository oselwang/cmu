<?php

namespace App\Cmu\Requests\Bengkel\CustomerBengkel;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\CustomerBengkel;

class CreateCustomerBengkelRequest extends Request
{

    protected $rules = [
        'nama'             => 'required',
        'alamat'           => 'required',
        'no_rangka'        => 'required',
        'no_polisi'        => 'required',
        'no_mesin'         => 'required',
        'unit_id'          => 'required',
        'stnk_expiry_date' => 'required',
        'warna_id'         => 'required',
        'gender'           => 'required'
    ];

    protected $messages = [
        'nama.required'             => 'Nama harus diisi',
        'alamat.required'           => 'Alamat harus diisi',
        'no_rangka.required'        => 'No Rangka harus diisi',
        'no_polisi.required'        => 'No Polisi harus diisi',
        'no_mesin.required'         => 'No Mesin harus diisi',
        'unit_id.required'          => 'Unit harus diisi',
        'warna_id.required'         => 'Warna harus diisi',
        'gender.required'           => 'Gender harus diisi',
        'stnk_expiry_date.required' => 'Tanggal Expired STNK harus diisi'
    ];

    public function handle()
    {
        $this->isValid();
        $model = new CustomerBengkel();
        $model->create([
            'dealer_id'        => \Session::get('dealer_id'),
            'warna_id'         => $this->fields('warna_id'),
            'unit_id'          => $this->fields('unit_id'),
            'kota_id'          => $this->fields('kota_id'),
            'kelurahan_id'     => $this->fields('kelurahan_id'),
            'kecamatan_id'     => $this->fields('kecamatan_id'),
            'jenis_buku_id'    => $this->fields('jenis_buku_id'),
            'no_rangka'        => $this->fields('no_rangka'),
            'no_polisi'        => $this->fields('no_polisi'),
            'no_mesin'         => $this->fields('no_mesin'),
            'tahun'            => $this->fields('tahun'),
            'tipe_konsumen'    => $this->fields('tipe_konsumen'),
            'no_ksg'           => $this->fields('no_ksg'),
            'nama'             => $this->fields('nama'),
            'alamat'           => $this->fields('alamat'),
            'kode_post'        => $this->fields('kode_post'),
            'tanggal_lahir'    => $this->fields('tanggal_lahir'),
            'telephone_number' => $this->fields('telephone_number'),
            'cellphone_number' => $this->fields('cellphone_number'),
            'id_number'        => $this->fields('id_number'),
            'stnk_expiry_date' => $this->fields('stnk_expiry_date')
        ]);

        return true;
    }
}