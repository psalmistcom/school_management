<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        if (!empty(Auth::check())) {
            $userType = Auth::user()->user_type;
            if ($userType == 1) {
                return redirect('admin/dashboard');
            } elseif ($userType == 2) {
                return redirect('teacher/dashboard');
            } elseif ($userType == 3) {
                return redirect('student/dashboard');
            } elseif ($userType == 4) {
                return redirect('parent/dashboard');
            } else {
                return redirect(url(''));
            }
        }
        return view('auth.login');
    }

    function authLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            $userType = Auth::user()->user_type;
            if ($userType == 1) {
                return redirect('admin/dashboard');
            } elseif ($userType == 2) {
                return redirect('teacher/dashboard');
            } elseif ($userType == 3) {
                return redirect('student/dashboard');
            } elseif ($userType == 4) {
                return redirect('parent/dashboard');
            } else {
                return redirect(url(''));
            }
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
