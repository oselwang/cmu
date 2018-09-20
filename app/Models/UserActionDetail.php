<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActionDetail extends Model
{
    protected $fillable = ['user_id', 'action_id'];

    protected $table = 'user_action_detail';
}
