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

//Employees routes
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/createEmployee', [EmployeesController::class, 'createEmployee'])->name('employee.create');
Route::post('/employees/storeEmployee', [EmployeesController::class, 'storeEmployee'])->name('employee.store');
Route::get('/employees/{employee}/editEmployee', [EmployeesController::class, 'editEmployee'])->name('employee.edit');
Route::put('/employees/{employee}/updateEmployee', [EmployeesController::class, 'updateEmployee'])->name('employee.update');
Route::delete('/employees/{employee}/deleteEmployee', [EmployeesController::class, 'deleteEmployee'])->name('employee.delete');


//Projects routes
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projects/createProject', [ProjectsController::class, 'createProject'])->name('project.create');
Route::post('/projects/storeProject', [ProjectsController::class, 'storeProject'])->name('project.store');
Route::get('/projects/{project}/editProject', [ProjectsController::class, 'editProject'])->name('project.edit');
Route::put('/projects/{project}/updateProject', [ProjectsController::class, 'updateProject'])->name('project.update');
Route::delete('/projects/{project}/deleteProject', [ProjectsController::class, 'deleteProject'])->name('project.delete');
