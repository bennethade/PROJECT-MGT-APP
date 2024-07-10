<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $data['getRecord'] = Project::all();

        return view('admin.general_projects.list', $data);
    }



    public function add()
    {
        return view('admin.general_projects.add');
    }

    public function store(Request $request) {
        $project = Project::create($request->all());
        // return response()->json($project, 201);
        return redirect()->route('general_projects.list')->with('success', 'Project Has Been Created Successfully!');
    }


    public function view_project($id){
        $data['getRecord'] = Project::findOrFail($id);
        return view('admin.general_projects.view_project', $data);
    }

    public function show($id) {
        // return Project::find($id);
        $data['getRecord'] = Project::findOrFail($id);
        return view('admin.general_projects.edit', $data);
    }

    public function update(Request $request, $id) {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        // return response()->json($project, 200);
        return redirect()->route('general_projects.list')->with('success', 'Project Updated Successfully!');
    }

    public function delete($id) {
        Project::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

