<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller {

    public function index() {
        $employees = Employees::all();
        return view('employees\employees', ['employees' => $employees]);
    }

    public function createEmployee(){
        return view('employees\createEmployee');
    }

    public function deleteEmployee(Employees $employee){
        $employee->delete();
        return redirect(route('employees.index'));
    }

}
