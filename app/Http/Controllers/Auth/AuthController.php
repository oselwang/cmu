<?php

namespace App\Http\Controllers\Auth;

use App\Cmu\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function login(LoginRequest $loginRequest)
    {
        $valid = $loginRequest->handle();
        $user_dealer = \Auth::user()->dealer()->get();
        if (count($user_dealer) == 1) {
            \Session::set('dealer_id', $user_dealer[0]->id);
        }
        return response()->json($valid);
    }

    public function logout()
    {
        \Session::remove('dealer_id');
        \Auth::logout();

        return redirect('auth/login');
    }
}
