<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/createEmployee', [EmployeesController::class, 'createEmployee'])->name('employee.create');
Route::delete('/employees/{employee}/deleteEmployee', [EmployeesController::class, 'deleteEmployee'])->name('employee.delete');



Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');

