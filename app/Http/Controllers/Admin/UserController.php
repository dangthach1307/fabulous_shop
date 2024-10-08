<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\User\UserServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }



    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchColumns = ['first_name', 'last_name'];
        $users = $this->userService->searchAndPaginate("name", $request->get('search'), 5, $searchColumns);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($request->get('password') != $request->get('password_confirmation')) {
            return back()->with('notification', 'ERROR: Confirm password not match');
        }

        $data = $request->all();
        $data['password'] = bcrypt($request->get('password'));

        //Image:
        if ($request->hasFile('avatar')) {
            $data['avatar'] = Common::uploadFile($request->file('avatar'), 'front/images/avatars/');
        }


        $user = $this->userService->create($data);

        return redirect('admin/user/' . $user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        $user = $this->userService->find($user->id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $data = $request->all();

        //password
        if ($request->get('password') != null) {
            if ($request->get('password') != $request->get('password_confirmation')) {
                return back()->with('notification', 'ERROR: Confirm password not match');
            }

            $data['password'] = bcrypt($request->get('password'));
        } else {
            unset($data['password']);
        }

        //image
        if ($request->hasFile('avatar')) {
            //add new
            $data['avatar'] = Common::uploadFile($request->file('avatar'), 'front/images/avatars/');

            //remove old
            $file_name_old =  $request->get('old_avatar');
            if ($file_name_old != '') {
                unlink('front/images/avatars/' . $file_name_old);
            }
        }

        //update data
        $this->userService->update($data, $user->id);
        return redirect('admin/user/' . $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $this->userService->delete($user->id);

        //delete avatar

        $file_name = $user->avatar;
        if ($file_name != '') {
            unlink('front/images/avatars/' . $file_name);
        }
        return redirect('admin/user/');
    }
}
