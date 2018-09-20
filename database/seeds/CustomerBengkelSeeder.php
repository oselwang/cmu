<?php

use Illuminate\Database\Seeder;

class CustomerBengkelSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Bengkel\CustomerBengkel::class, 150)->create();
    }
}