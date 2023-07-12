<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function list()
    {
        $data['header_title'] = "Class List";
        return view('admin.class.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add new class";
        return view('admin.class.add', $data);
    }
}
