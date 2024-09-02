<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $orderService;

    public function __construct(UserServiceInterface $userService, OrderServiceInterface $orderService)
    {
        $this->userService = $userService;
        $this->orderService = $orderService;
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
            'level' => Constant::user_level_client, //customer
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            // return redirect()->route('home');
            return redirect()->intended('/');//default: home
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
            'level' => Constant::user_level_client, //customer
        ];

        $this->userService->create($data);
        return redirect()->route('account.login')->with('notification', 'Register success. Please login');
    }
    public function myOrderIndex()
    {
        $orders = $this->orderService->getOrderByUserId(Auth::id());
        return view('front.account.my-order.index', compact('orders'));
    }
    public function myOrderShow($id)
    {
        $order = $this->orderService->find($id);
        return view('front.account.my-order.show', compact('order'));
    }

    public function logout()
    {
        Auth::logout();
        return back();
    }
}
