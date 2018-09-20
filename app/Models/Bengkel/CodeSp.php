<?php

namespace App\Models\Bengkel;

use Illuminate\Database\Eloquent\Model;

class CodeSp extends Model
{
    protected $fillable = ['deskripsi', 'subtitude', 'kategori_sp_id', 'tipe_sp_id', 'identifier', 'status'];

    protected $table = 'code_sp_bengkel';


    public function tipe_sp()
    {
        return $this->belongsTo(TipeSp::class);
    }

    public function kategori_sp()
    {
        return $this->belongsTo(KategoriSp::class);
    }
}
