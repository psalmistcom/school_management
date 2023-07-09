<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

    public function forgotPassword()
    {
        return view('auth.forgot');
    }

    public function postForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if (!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()
                ->back()
                ->with('success', 'Check your email for a password reset link');
        } else {
            return redirect()->back()->with('error', "Email not found");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
