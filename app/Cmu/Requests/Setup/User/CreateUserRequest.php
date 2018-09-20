<?php

namespace App\Cmu\Requests\Setup\User;

use App\Cmu\Requests\Request;
use App\Models\Dealer;
use App\Models\Role;
use App\Models\User;
use App\Models\UserActionDetail;
use App\Models\UserDealerDetail;

class CreateUserRequest extends Request
{

    protected $rules = [
        'nama'      => 'required',
        'username'  => 'required|unique:users',
        'password'  => 'required',
        'action_id' => 'required',
        'role_id'   => 'required',
        'dealer_id' => 'required'
    ];

    protected $messages = [
        'nama.required'      => 'Nama harus diisi',
        'username.required'  => 'Username harus diisi',
        'password.required'  => 'Password harus diisi',
        'action_id.required' => 'Hak akses minimal 1',
        'role_id.required'   => 'Role harus diisi',
        'dealer_id.required' => 'Dealer minimal 1',
        'username.unique'    => 'Username sudah pernah dibuat',
    ];

    public function handle()
    {
        $this->isValid();

        $model = new User();
        $dealer_model = new UserDealerDetail();
        $action_model = new UserActionDetail();
        $user = $model->create([
            'nama'     => 'Osel',
            'username' => $this->fields('username'),
            'password' => bcrypt($this->fields('password')),
            'role_id'  => intval($this->fields('role_id'))
        ]);
        for ($i = 0; $i < count($this->fields('action_id')); $i++) {
            $action_model->create([
                'action_id' => $this->fields('action_id')[$i],
                'user_id'   => $user->id
            ]);
        }

        for ($i = 0; $i < count($this->fields('dealer_id')); $i++) {
            $dealer_model->create([
                'dealer_id' => $this->fields('dealer_id')[$i],
                'user_id'   => $user->id
            ]);
        }


    }
}