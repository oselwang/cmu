<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new \App\Models\User();
        $model = $user->create([
            'nama'     => 'Osel Dharmawan awang',
            'username' => 'osel_cipta',
            'password' => bcrypt('oselwang'),
            'role_id'  => 1
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 1
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 2
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 3
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 4
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 5
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 6
        ]);

        \App\Models\UserActionDetail::create([
            'user_id'   => $model->id,
            'action_id' => 1
        ]);
        \App\Models\UserActionDetail::create([
            'user_id'   => $model->id,
            'action_id' => 2
        ]);
        \App\Models\UserActionDetail::create([
            'user_id'   => $model->id,
            'action_id' => 3
        ]);
        \App\Models\UserActionDetail::create([
            'user_id'   => $model->id,
            'action_id' => 4
        ]);
        \App\Models\UserActionDetail::create([
            'user_id'   => $model->id,
            'action_id' => 5
        ]);
        $model = $user->create([
            'nama'     => 'Osel Dharmawan awang',
            'username' => 'osel_mitra',
            'password' => bcrypt('oselwang'),
            'role_id'  => 4
        ]);
        \App\Models\UserDealerDetail::create([
            'user_id'   => $model->id,
            'dealer_id' => 2
        ]);
        \App\Models\UserActionDetail::create([
            'user_id'   => $model->id,
            'action_id' => 1
        ]);
    }
}