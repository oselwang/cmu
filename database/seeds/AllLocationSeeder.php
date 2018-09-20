<?php

use Illuminate\Database\Seeder;

class AllLocationSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Kota::class, 50)->create();
        factory(\App\Models\Kelurahan::class, 50)->create();
        factory(\App\Models\Kecamatan::class, 50)->create();
    }
}