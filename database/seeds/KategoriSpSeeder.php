<?php

use Illuminate\Database\Seeder;

class KategoriSpSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Bengkel\KategoriSp::class, 50)->create();
        factory(\App\Models\Bengkel\TipeSp::class, 50)->create();
        factory(\App\Models\Bengkel\CodeSp::class, 50)->create();
        factory(\App\Models\Bengkel\DetailSp::class, 50)->create();

        foreach (factory(\App\Models\Bengkel\PenjualanSp::class, 50)->create() as $penjualan) {
            factory(\App\Models\Bengkel\PenjualanSpDetail::class, 4)->create([
                'penjualan_sp_id' => $penjualan->id
            ]);
        };
    }
}