<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EmployeesController extends Controller {


    public object $employees;

//    public function __construct(){
//        $this->employees = Employees::all();
//        View::share('employees', $this->employees);
//    }

    public function index() {
        return view('employees\employees');
    }

    public function createEmployee(){
        return view('employees\createEmployee');
    }

    public function deleteEmployee(Employees $employee){
        $employee->delete();
        return redirect(route('employees.index'));
    }

}
