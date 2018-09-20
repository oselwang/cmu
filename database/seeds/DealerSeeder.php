<?php

use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    public function run()
    {
        $user = new \App\Models\Dealer();
        $model = $user->create([
            'nama' => 'HO - CMU HOLDING',
        ]);
        $model = $user->create([
            'nama' => 'CMURGT - CV. Cipta Mitra Usaha-Rengat',
        ]);
        $model = $user->create([
            'nama' => 'CMUBLS - CV. Cipta Mitra Usaha-Belilas',
        ]);
        $model = $user->create([
            'nama' => 'CMUAIR - CV. Cipta Mitra Usaha-Air Molek',
        ]);
        $model = $user->create([
            'nama' => 'CMUPRN - CV. Cipta Mitra Usaha-Peranap',
        ]);
        $model = $user->create([
            'nama' => 'CMUBTG - CV. Cipta Mitra Usaha-Batanggangsal',
        ]);

    }
}