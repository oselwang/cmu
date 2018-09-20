<?php

use Illuminate\Database\Seeder;

class JenisBukuSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Bengkel\JenisBuku::class, 50)->create();
    }
}