<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
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

    function authLogin(AuthRequest $request)
    {
        $request->validated($request->all());
        $remember = !empty($request->remember) ? true : false;
        $data = Auth::attempt($request->only(['email', 'password']), $remember);

        if (!$data) {
            return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'wrong credentials');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect(url('/'));
    }
}
