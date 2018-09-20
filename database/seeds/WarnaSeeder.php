<?php

use Illuminate\Database\Seeder;

class WarnaSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Warna::class, 50)->create();
    }
}