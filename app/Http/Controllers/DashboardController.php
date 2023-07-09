<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = 'Dashboard';
        if (!empty(Auth::check())) {
            $userType = Auth::user()->user_type;
            if ($userType == 1) {
                return view('admin.dashboard', $data);
            } elseif ($userType == 2) {
                return view('teacher.dashboard', $data);
            } elseif ($userType == 3) {
                return view('student.dashboard', $data);
            } elseif ($userType == 4) {
                return view('parent.dashboard', $data);
            }
        }
    }
}
