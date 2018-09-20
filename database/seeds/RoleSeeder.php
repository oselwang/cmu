<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $role = new \App\Models\Role();
        $model = $role->create([
            'nama' => 'Owner',
        ]);
        $model = $role->create([
            'nama' => 'Manager',
        ]);
        $model = $role->create([
            'nama' => 'Supervisor',
        ]);
        $model = $role->create([
            'nama' => 'Staff Bengkel',
        ]);
        $model = $role->create([
            'nama' => 'Staff Finance',
        ]);
        $model = $role->create([
            'nama' => 'Staff Accounting',
        ]);
    }
}