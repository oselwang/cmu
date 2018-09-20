<?php

namespace App\Http\Controllers\Setup;

use App\Services\Setup\UserManagementService;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    /**
     * @var UserManagementService
     */
    private $userManagementService;

    /**
     * PageController constructor.
     * @param UserManagementService $userManagementService
     */
    public function __construct(UserManagementService $userManagementService)
    {
        $this->userManagementService = $userManagementService;
    }

    public function userManagement()
    {
        $users = $this->userManagementService->all();

        return view('setup.user_management', compact('users'));
    }
}