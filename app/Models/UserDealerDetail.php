<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDealerDetail extends Model
{
    protected $fillable = ['user_id', 'dealer_id'];
    protected $table = 'user_dealer_detail';
}
