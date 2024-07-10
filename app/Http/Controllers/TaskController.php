<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskList()
    {
        $data['header_title'] = "Task List";
        return view('admin.task.list', $data);
    }



}
