<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EmployeesController extends Controller {


    public function index() {
        return view('employees\employees');
    }

    public function createEmployee(){
        return view('employees\createEmployee');
    }

    public function storeEmployee(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'project_id' => 'required|numeric',
        ]);
        $newEmployee = Employees::create($data);
//        $newEmployee->user_id = Auth::user()->id;
//        $newEmployee->save();
        return view('employees\employees');

    }

    public function deleteEmployee(Employees $employee){
        $employee->delete();
        return redirect(route('employees.index'));
    }

}
