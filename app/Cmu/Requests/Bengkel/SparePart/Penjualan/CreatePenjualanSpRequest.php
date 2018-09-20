<?php

namespace App\Cmu\Requests\Bengkel\SparePart\Penjualan;

use App\Cmu\Requests\Request;
use App\Models\Bengkel\DetailSp;
use App\Models\Bengkel\PenjualanSp;
use App\Models\Bengkel\PenjualanSpDetail;

class CreatePenjualanSpRequest extends Request
{

    protected $rules = [
        'customer_bengkel_id' => 'required',
        'user_id'             => 'required',
        'ref_date'            => 'required',
        'detail_sp_id'        => 'required',
    ];

    protected $messages = [
        'customer_bengkel_id.required' => 'Customer harus diisi',
        'user_id.required'             => 'Mohon refresh kembali page',
        'ref_date.required'            => 'Ref date harus diisi',
        'detail_sp_id.required'        => 'Sparepart harus diisi'
    ];

    public function handle()
    {
        $this->isValid();
        $date_split = explode('-', $this->request->get('ref_date'));
        $month = $date_split[1];
        $year = $date_split[0];
        $model = new PenjualanSp();
        $penjualan_sp = $model->create([
            'nama'                => $this->fields('nama'),
            'stock'               => $this->fields('stock'),
            'customer_bengkel_id' => intval($this->fields('customer_bengkel_id')),
            'user_id'             => intval($this->fields('user_id')),
            'ref_date'            => $this->fields('ref_date'),
            'ref_no'              => '1',
            'total_harga'         => 0
        ]);
        $harga = 0;
        $qty = 0;
        for ($i = 0; $i < count($this->request->get('detail_sp_id')); $i++) {
            $model = new PenjualanSpDetail();
            $detail_sp_id = intval($this->request->get('detail_sp_id')[$i]);
            $qty_detail = intval($this->request->get('qty')[$i]);
            $detail_sp = DetailSp::where('id', $detail_sp_id)->first();

            if ($detail_sp->stock - $qty_detail < 0) {
                throw new \Exception('Tidak bisa input jika stock tidak mencukupi');
            }

            $detail_sp->stock = $detail_sp->stock - $qty_detail;
            $detail_sp->save();

            $subtotal = $detail_sp->harga_jual * $qty_detail;
            $model->create([
                'detail_sp_id'    => $detail_sp_id,
                'penjualan_sp_id' => $penjualan_sp->id,
                'harga'           => $detail_sp->harga_jual,
                'qty'             => $qty_detail,
                'subtotal'        => $subtotal,
            ]);

            $harga += $subtotal;
            $qty += $qty_detail;
        }
        $ref_no = $penjualan_sp->id . '/SellingOut/' . $month . '/' . $year;
        $penjualan_sp->ref_no = $ref_no;
        $penjualan_sp->total_harga = $harga;
        $penjualan_sp->qty = $qty;
        $penjualan_sp->save();
        return true;
    }
}