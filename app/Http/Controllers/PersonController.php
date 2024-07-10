<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function list()
    {
        $data['header_title'] = "People List";
        return view('admin.people.list', $data);
    }


   



}
