<?php

namespace App\Services\Setup;

use App\Models\User;

class UserManagementService
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserManagementService constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        $users = $this->user->orderBy('nama', 'asc')->with(['role', 'action', 'dealer'])->get();

        return $users;
    }

    public function getByID($user_id)
    {
        $user = $this->user->where('id', intval($user_id))->with(['role', 'action', 'dealer'])->first();

        return $user;
    }
}