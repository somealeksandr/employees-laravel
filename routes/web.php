<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/departments/{slug?}', [DepartmentController::class, 'index']);
Route::get('/admin/departments/', [DepartmentController::class, 'indexAdmin']);


Route::resource('employees', EmployeeController::class);
