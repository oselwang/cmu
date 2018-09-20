<?php

use Illuminate\Database\Seeder;

class TipeJasaSeeder extends Seeder
{

    public function run()
    {
        $tipe_jasa = new \App\Models\Bengkel\TipeJasa();
        $model = $tipe_jasa->create([
            'deskripsi' => 'Service Gratis',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'Service Ringan',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'Service Berat',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'Overhoul',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'Lain-Lain',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'ONGKOS PASANG PART',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'ONGKOS PASANG PART 5000',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'ONGKOS PASANG PART 35000',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'SKIR KLEP',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'PROMO PAKET SERVICE INJEKTOR B',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'PROMO SERVICE GRATIS 5 X 1',
        ]);
        $model = $tipe_jasa->create([
            'deskripsi' => 'SERVICE PAKET',
        ]);

    }
}