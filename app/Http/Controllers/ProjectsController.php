<?php

namespace App\Http\Controllers;


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

    public function deleteProject(Projects $project){
        $project->delete();
        return redirect(route('projects.index'));
    }
}
