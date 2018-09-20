<?php

use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    public function run()
    {
        $action = new \App\Models\Action();
        $action->create([
            'nama' => 'Update'
        ]);
        $action->create([
            'nama' => 'Create'
        ]);
        $action->create([
            'nama' => 'View'
        ]);
        $action->create([
            'nama' => 'Report'
        ]);
        $action->create([
            'nama' => 'Delete'
        ]);
    }
}