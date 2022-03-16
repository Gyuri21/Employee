<?php

use Illuminate\Support\Facades\Route;
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

Route::get( "/add-employee", [ EmployeeController::class, "addEmployee" ]);
Route::post( "/save-employee", [ EmployeeController::class, "storeEmployee" ]);
Route::get( "/list-employee", [ EmployeeController::class, "listEmployee" ]);
Route::get( "/delete/{id}", [ EmployeeController::class, "deleteEmployee" ]);
Route::get( "/show/{id}", [ EmployeeController::class, "showEmployee" ]);
Route::post( "/update-employee", [ EmployeeController::class, "updateEmployee" ]);