<?php

namespace App\Http\Controllers;


use App\Models\Employees;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ProjectsController extends Controller
{

    public function index() {
        return view('projects\projects');
    }

    public function createProject(){
        return view('projects\createProject');
    }

    public function storeProject(Request $request){
        $data = $request->validate([
            'name' => 'required',
        ]);
        $newProject = Projects::create($data);
        return redirect(route('projects.index'));
    }

    public function editProject(Projects $project){
        return view('projects\editProject', ['project' => $project]);
    }

    public function updateProject(Projects $project, Request $request){

        $data = $request->validate([
            'name' => 'required',
        ]);
        $project->update($data);
        
        return redirect(route('projects.index'));
    }

    public function deleteProject(Projects $project){
        $project->delete();
        return redirect(route('projects.index'));
    }
}
