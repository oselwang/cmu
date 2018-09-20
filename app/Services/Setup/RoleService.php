<?php

namespace App\Services\Setup;

use App\Models\Role;

class RoleService
{
    /**
     * @var Role
     */
    private $role;

    /**
     * RoleService constructor.
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function all()
    {
        $roles = $this->role->orderBy('id', 'asc')->get();

        return $roles;
    }
}