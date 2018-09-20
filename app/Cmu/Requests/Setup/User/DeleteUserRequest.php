<?php

namespace App\Cmu\Requests\Setup\User;

use App\Cmu\Requests\Request;
use App\Models\User;
use App\Models\UserActionDetail;
use App\Models\UserDealerDetail;

class DeleteUserRequest extends Request
{
    protected $rules = [
        'user_id' => 'required'
    ];

    protected $messages = [
        'user_id.required' => 'Terjadi kesalahan pada sistem. Mohon refresh kembali'
    ];

    public function handle()
    {
        $this->isValid();

        $model = new User();
        $action_model = new UserActionDetail();
        $dealer_model = new UserDealerDetail();

        $model->where('id', intval($this->fields('user_id')))->delete();
        $action_model->where('user_id', $this->fields('user_id'))->delete();
        $dealer_model->where('user_id', $this->fields('user_id'))->delete();
    }
}