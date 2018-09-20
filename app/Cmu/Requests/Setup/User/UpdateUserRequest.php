<?php

namespace App\Cmu\Requests\Setup\User;

use App\Cmu\Requests\Request;
use App\Models\User;
use App\Models\UserActionDetail;
use App\Models\UserDealerDetail;

class UpdateUserRequest extends Request
{

    protected $rules = [
        'nama'      => 'required',
        'username'  => 'required|unique:users',
        'password'  => 'required',
        'action_id' => 'required',
        'role_id'   => 'required',
        'dealer_id' => 'required',
        'user_id'   => 'required'
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
        $action_model = new UserActionDetail();
        $dealer_model = new UserDealerDetail();

        $user = $model->where('id', intval($this->fields('user_id')))->first();
        $user->nama = $this->fields('nama');
        $user->username = $this->fields('username');
        $user->password = bcrypt($this->fields('password'));
        $user->role_id = intval($this->fields('role_id'));
        $user->save();
        $action_model->where('user_id', $this->fields('user_id'))->delete();
        $dealer_model->where('user_id', $this->fields('user_id'))->delete();

        for ($i = 0; $i < count($this->fields('action_id')); $i++) {
            $action_model->create([
                'action_id' => $this->fields('action_id')[$i],
                'user_id'   => $this->fields('user_id')
            ]);
        }

        for ($i = 0; $i < count($this->fields('dealer_id')); $i++) {
            $dealer_model->create([
                'dealer_id' => intval($this->fields('dealer_id')[$i]),
                'user_id'   => intval($this->fields('user_id'))
            ]);
        }
    }
}