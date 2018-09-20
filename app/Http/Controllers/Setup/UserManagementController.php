<?php

namespace App\Http\Controllers\Setup;

use App\Cmu\Requests\Setup\User\CreateUserRequest;
use App\Cmu\Requests\Setup\User\DeleteUserRequest;
use App\Cmu\Requests\Setup\User\UpdateUserRequest;
use App\Services\Setup\UserManagementService;
use Illuminate\Routing\Controller;

class UserManagementController extends Controller
{
    /**
     * @var UserManagementService
     */
    private $userManagementService;

    /**
     * UserManagementController constructor.
     * @param UserManagementService $userManagementService
     */
    public function __construct(UserManagementService $userManagementService)
    {
        $this->userManagementService = $userManagementService;
        $this->middleware('action.update', ['only' => 'update']);
        $this->middleware('action.create', ['only' => 'create']);
        $this->middleware('action.delete', ['only' => 'delete']);
    }

    public function index()
    {
        $users = $this->userManagementService->all();

        return response()->json($users);
    }

    public function show($user_id)
    {
        $user = $this->userManagementService->getByID($user_id);

        return response()->json($user);
    }

    public function create(CreateUserRequest $createUserRequest)
    {
        \DB::transaction(function () use ($createUserRequest) {
            $createUserRequest->handle();
        });

        return response()->json(true);
    }

    public function update(UpdateUserRequest $updateUserRequest)
    {
        \DB::transaction(function () use ($updateUserRequest) {
            $updateUserRequest->handle();
        });

        return response()->json(true);
    }

    public function delete(DeleteUserRequest $deleteUserRequest)
    {
        \DB::transaction(function () use ($deleteUserRequest) {
            $deleteUserRequest->handle();
        });

        return response()->json(true);
    }
}