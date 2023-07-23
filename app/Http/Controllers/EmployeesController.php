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
        if($request->project_id === ''){
            $request->project_id = null;
        };
        $data = $request->validate([
            'name' => 'required',
            'project_id' => 'numeric|nullable',
        ]);
        $newEmployee = Employees::create($data);
        return view('employees\employees');

    }

    public function editEmployee(Employees $employee){
        return view('employees\editEmployee', ['employee' => $employee]);
    }

    public function deleteEmployee(Employees $employee){
        $employee->delete();
        return redirect(route('employees.index'));
    }

}
