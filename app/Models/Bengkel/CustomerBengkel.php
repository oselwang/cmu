<?php

namespace App\Models\Bengkel;

use App\Models\Dealer;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use App\Models\Unit;
use App\Models\Warna;
use Illuminate\Database\Eloquent\Model;

class CustomerBengkel extends Model
{
    protected $fillable = ['dealer_id', 'warna_id', 'unit_id', 'jenis_buku_id', 'kota_id', 'kecamatan_id', 'kelurahan_id',
        'no_rangka', 'no_polisi', 'no_mesin', 'tahun', 'tipe_konsumen', 'no_ksg', 'nama', 'alamat', 'kode_pos', 'gender', 'tanggal_lahir',
        'telephone_number', 'cellphone_number', 'id_number', 'stnk_expiry_date'];

    protected $table = 'customer_bengkel';

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    public function warna()
    {
        return $this->belongsTo(Warna::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function jenis_buku()
    {
        return $this->belongsTo(JenisBuku::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}
