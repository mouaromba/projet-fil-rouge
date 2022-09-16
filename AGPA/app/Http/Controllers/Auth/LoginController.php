<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    function login(Request $request)
    {
        $data = $request->except('_token');
        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role == 1) {
                return redirect('driver_dashboad');
            } elseif ($user->role == 2) {
                return redirect('dispatcher_dashboad');
            } elseif ($user->role == 3) {
                return redirect('passenger_dashboad');
            }
        } else {
            return redirect('loginform');
        }
    }

    function loginform()
    {
        return view('auth.login');
    }
    function logout()
    {
        Auth::logout();
        return redirect('loginform');
    }
}
