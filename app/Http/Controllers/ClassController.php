<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function list()
    {
        return view('admin.class.list');
    }
}
