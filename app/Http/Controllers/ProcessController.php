<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function list()
    {
        $data['header_title'] = "People List";
        return view('admin.process.list', $data);
    }


}
