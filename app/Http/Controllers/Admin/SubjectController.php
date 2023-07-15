<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function list()
    {
        // $data['getRecord'] = ClassModel::getRecord();
        $data['header_title'] = "Subject List";
        return view('admin.subject.list', $data);
    }
}
