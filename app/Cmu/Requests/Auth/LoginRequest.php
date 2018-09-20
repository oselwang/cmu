<?php

namespace App\Cmu\Requests\Auth;

use App\Cmu\Requests\Request;

class LoginRequest extends Request
{

    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    protected $messages = [
        'username.required' => 'Username harus isi',
        'password.required' => 'Password harus isi'
    ];

    public function handle()
    {
        $this->isValid();

        if ($user = \Auth::attempt(['username' => $this->request->get('username'), 'password' => $this->request->get('password')])) {
            return true;
        }
        throw new \Exception('Kresensial tidak cocok');
    }
}