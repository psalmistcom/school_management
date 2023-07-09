<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (!empty(Auth::check())) {
            $userType = Auth::user()->user_type;
            if ($userType == 1) {
                return view('admin.dashboard');
            } elseif ($userType == 2) {
                return view('teacher.dashboard');
            } elseif ($userType == 3) {
                return view('student.dashboard');
            } elseif ($userType == 4) {
                return view('parent.dashboard');
            }
        }
    }
}
