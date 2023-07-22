<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Projects;
use Illuminate\Http\Request;


class ProjectsController extends Controller
{
    public function index() {
        $projects = Projects::all();
        return view('projects\projects', ['projects' => $projects]);
    }

    public function createProject(){
        return view('projects\createProject');
    }

    public function deleteProject(Projects $project){
        $project->delete();
        return redirect(route('projects.index'));
    }
}
