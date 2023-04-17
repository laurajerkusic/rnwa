<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('product', App\Http\Controllers\ProducttController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php



Route::get('/departments', [DepartmentsController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentsController::class, 'store'])->name('departments.store');
Route::get('/departments/{department}/edit', [DepartmentsController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{department}', [DepartmentsController::class, 'update'])->name('departments.update');
Route::delete('/departments/{department}', [DepartmentsController::class, 'destroy'])->name('departments.destroy');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{emp_no}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{emp_no}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{emp_no}', [EmployeeController::class, 'destroy'])->name('employees.destroy');




Route::get('/salaries', [SalaryController::class, 'index'])->name('salaries.index');
Route::get('/salaries/create', [SalaryController::class, 'create'])->name('salaries.create');
Route::post('/salaries', [SalaryController::class, 'store'])->name('salaries.store');
Route::get('/salaries/{salary}', [SalaryController::class, 'show'])->name('salaries.show');
Route::get('/salaries/{salary}/edit', [SalaryController::class, 'edit'])->name('salaries.edit');
Route::put('/salaries/{salary}', [SalaryController::class, 'update'])->name('salaries.update');
Route::delete('/salaries/{salary}', [SalaryController::class, 'destroy'])->name('salaries.destroy');
