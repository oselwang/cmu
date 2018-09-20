<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [];
    protected $table = 'roles';

    public function user()
    {
        $this->hasMany(User::class);
    }
}
