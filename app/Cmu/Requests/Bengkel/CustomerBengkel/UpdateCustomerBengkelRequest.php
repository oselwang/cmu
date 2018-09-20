<?php

namespace App\Cmu\Requests\Bengkel\CustomerBengkel;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\CustomerBengkel;

class UpdateCustomerBengkelRequest extends Request
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

        $customer_bengkel = $model->where('id', intval($this->fields('customer_bengkel_id')))->first();
        $customer_bengkel->kota_id = intval($this->fields('kota_id'));
        $customer_bengkel->kelurahan_id = intval($this->fields('kelurahan_id'));
        $customer_bengkel->warna_id = intval($this->fields('warna_id'));
        $customer_bengkel->kecamatan_id = intval($this->fields('kecamatan_id'));
        $customer_bengkel->jenis_buku_id = intval($this->fields('jenis_buku_id'));
        $customer_bengkel->tahun = intval($this->fields('tahun'));
        $customer_bengkel->nama = $this->fields('nama');
        $customer_bengkel->tipe_konsumen = $this->fields('tipe_konsumen');
        $customer_bengkel->no_rangka = $this->fields('no_rangka');
        $customer_bengkel->no_mesin = $this->fields('no_mesin');
        $customer_bengkel->alamat = $this->fields('alamat');
        $customer_bengkel->kode_pos = $this->fields('kode_pos');
        $customer_bengkel->gender = $this->fields('gender');
        $customer_bengkel->tanggal_lahir = $this->fields('tanggal_lahir');
        $customer_bengkel->telephone_number = $this->fields('telephone_number');
        $customer_bengkel->cellphone_number = $this->fields('cellphone_number');
        $customer_bengkel->id_number = $this->fields('id_number');
        $customer_bengkel->stnk_expiry_date = $this->fields('stnk_expiry_date');
        $customer_bengkel->save();

        return true;
    }
}