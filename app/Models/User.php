<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'username', 'password','role_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function action()
    {
        return $this->belongsToMany(Action::class, 'user_action_detail');
    }

    public function dealer()
    {
        return $this->belongsToMany(Dealer::class, 'user_dealer_detail')->withPivot(['dealer_id','user_id']);
    }

    public function hasRole($role)
    {
        $role = $this->role()->where('nama', $role)->count();
        if ($role == 0) {
            return false;
        }

        return true;
    }

    public function hasAction($action)
    {
        $action = $this->action()->where('nama', $action)->count();
        if ($action == 0) {
            return false;
        }

        return true;
    }
}
