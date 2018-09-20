<?php

namespace App\Cmu\Requests\Bengkel\Jasa;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailJasa;
use App\Models\Bengkel\TipeJasa;

class CreateDetailJasaRequest extends Request
{

    protected $rules = [
        'deskripsi'      => 'required',
        'tipe_jasa_id'   => 'required',
        'estimasi_jam'   => 'required',
        'estimasi_menit' => 'required',
        'estimasi_detik' => 'required',
        'harga'          => 'required',

    ];

    protected $messages = [
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

        $model->create([
            'deskripsi'      => $this->fields('deskripsi'),
            'tipe_jasa_id'   => intval($this->fields('tipe_jasa_id')),
            'estimasi_jam'   => $estimasi_jam,
            'estimasi_menit' => $estimasi_menit,
            'estimasi_detik' => $estimasi_detik,
            'harga'          => intval($this->fields('harga')),
        ]);

        return true;
    }
}