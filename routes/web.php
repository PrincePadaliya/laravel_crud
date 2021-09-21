<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeesController;

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

Route::get('/employee','App\Http\Controllers\EmployeeController@index');
Route::post('/addimage','App\Http\Controllers\EmployeeController@store')->name('addimage');

Route::get('list',[employeesController::class,'show']);
Route::get('delete/{id}',[employeesController::class,'delete']);
Route::get('edit/{id}',[employeesController::class,'showData']);
Route::post('edit',[employeesController::class,'update']);
