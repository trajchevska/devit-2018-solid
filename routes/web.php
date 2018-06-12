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

Route::get('/leaveRequests', 'LeaveRequestsController@leaveRequests')->name('leaveRequests');
Route::get('/employeeLeaveRequests/{id}', 'LeaveRequestsController@employeeLeaveRequests')->name('employeeLeaveRequests');

Route::get('/timeLogs', 'TimeLogsController@timeLogs')->name('timeLogs');
Route::get('/employeeTimeLogs/{id}', 'TimeLogsController@employeeTimeLogs')->name('employeeTimeLogs');