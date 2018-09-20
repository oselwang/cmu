<?php

use Illuminate\Database\Seeder;

class DetailJasaSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Bengkel\DetailJasa::class, 50)->create();
    }
}