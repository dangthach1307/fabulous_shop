<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }
    public function login()
    {
        return view("front.account.login");
    }
    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 2, //customer
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('home');
        } else {
            return back()->with('notification', 'ERROR: Wrong email or password');
        }
    }


    public function register()
    {
        return view("front.account.register");
    }

    public function postRegister(Request $request)
    {
        if ($request->password != $request->confirm_password) {
            return back()->with('notification', 'ERROR: Confirm password not match');
        }

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 2, //customer
        ];

        $this->userService->create($data);
        return redirect()->route('account.login')->with('notification', 'Register success. Please login');
    }


    public function logout()
    {
        Auth::logout();
        return back();
    }
}
