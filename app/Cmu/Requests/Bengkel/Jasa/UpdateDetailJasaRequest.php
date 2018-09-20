<?php

namespace App\Cmu\Requests\Bengkel\Jasa;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailJasa;
use App\Models\Bengkel\TipeJasa;

class UpdateDetailJasaRequest extends Request
{

    protected $rules = [
        'detail_jasa_id' => 'required',
        'deskripsi'      => 'required',
        'tipe_jasa_id'   => 'required',
        'estimasi_jam'   => 'required',
        'estimasi_menit' => 'required',
        'estimasi_detik' => 'required',
        'harga'          => 'required',

    ];

    protected $messages = [
        'detail_jasa_id.required' => 'Mohon refresh kembali halaman',
        'deskripsi.required'      => 'Deskripsi harus diisi',
        'tipe_jasa_id.required'   => 'Tipe Jasa harus diisi',
        'estimasi_jam.required'   => 'Estimasi Jam harus diisi',
        'estimasi_menit.required' => 'Estimasi Menit harus diisi',
        'estimasi_detik.required' => 'Estimasi Detik harus diisi',
        'harga.required'          => 'Harga harus diisi',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new DetailJasa();
        $estimasi_jam = $this->fields('estimasi_jam');
        $estimasi_menit = $this->fields('estimasi_menit');
        $estimasi_detik = $this->fields('estimasi_detik');
        if ($estimasi_jam == '00') {

        } elseif (strlen($estimasi_jam) < 2 && intval($estimasi_jam) < 10) {
            $estimasi_jam = '0' . $estimasi_jam;
        }
        if ($estimasi_menit == '00') {

        } elseif (strlen($estimasi_menit) < 2 && intval($estimasi_menit) < 10) {
            $estimasi_menit = '0' . $estimasi_menit;
        }
        if ($estimasi_detik == '00') {

        } elseif (strlen($estimasi_detik) < 2 && intval($estimasi_detik) < 10) {
            $estimasi_detik = '0' . $estimasi_detik;
        }

        $detail_jasa = $model->where('id', $this->fields('detail_jasa_id'))->first();
        $detail_jasa->deskripsi = $this->fields('deskripsi');
        $detail_jasa->tipe_jasa_id = $this->fields('tipe_jasa_id');
        $detail_jasa->estimasi_jam = $estimasi_jam;
        $detail_jasa->estimasi_menit = $estimasi_menit;
        $detail_jasa->estimasi_detik = $estimasi_detik;
        $detail_jasa->harga = intval($this->fields('harga'));
        $detail_jasa->save();

        return true;
    }
}