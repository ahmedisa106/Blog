<?php

namespace Modules\AdminModule\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('adminmodule::admins.auth.login');

    }

    public function doLogin(Request $request)
    {
        $remember = (bool)$request->remember_me;
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect('/admin');
        } else {
            return redirect()->back();
        }

    }

    public function logout()
    {
        auth()->guard('admin')->logout();

        return redirect()->back();

    }
}
