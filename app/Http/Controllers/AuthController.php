<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        if (!empty(Auth::check())) {
            return redirect('admin/dashboard');
        }
        return view('auth.login');
    }

    function authLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'wrong credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
