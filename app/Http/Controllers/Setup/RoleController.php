<?php

namespace App\Http\Controllers\Setup;

use App\Services\Setup\RoleService;
use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    /**
     * @var RoleService
     */
    private $roleService;

    /**
     * RoleController constructor.
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        $roles = $this->roleService->all();

        return response()->json($roles);
    }
}