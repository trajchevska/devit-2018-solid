<?php

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

Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/employee/{id}', 'EmployeeController@details')->name('employeeDetails');
Route::get('/leaveRequests', 'EmployeeController@leaveRequests')->name('leaveRequests');
Route::get('/employeeLeaveRequests/{id}', 'EmployeeController@employeeLeaveRequests')->name('employeeLeaveRequests');
Route::get('/timeLogs', 'EmployeeController@timeLogs')->name('timeLogs');
Route::get('/employeeTimeLogs/{id}', 'EmployeeController@employeeTimeLogs')->name('employeeTimeLogs');