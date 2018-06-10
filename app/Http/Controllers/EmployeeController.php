<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeMock;

class EmployeeController extends Controller
{
    /**
     * Displays a list of all employees
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function index(EmployeeMock $employeeMock)
    {
        $employees = $employeeMock->getAll();
        return view('employees', compact('employees'));
    }

    /**
     * Displays the details for the selected employee
     * @param  integer       $id          
     * @param  EmployeeMock $employeeMock 
     * @return Illuminate\View\View                     
     */
    public function details($id, EmployeeMock $employeeMock)
    {
        $employee = $employeeMock->getDetails($id);
        return view('employee_details', compact('employee'));
    }

    /**
     * Displays all leave requests
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function leaveRequests(EmployeeMock $employeeMock)
    {
        $leaveRequests = $employeeMock->getLeaveRequests();
        return view('leave_requests', compact('leaveRequests'));
    }

    /**
     * Displays leave requests for the given employee
     * @param  integer       $employeeId
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function employeeLeaveRequests($employeeId, EmployeeMock $employeeMock)
    {
        $leaveRequests = $employeeMock->getEmployeeLeaveRequests($employeeId);
        return view('employee_leave_requests', compact('leaveRequests'));
    }

    /**
     * Displays all time logs
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function timeLogs(EmployeeMock $employeeMock)
    {
        $timeLogs = $employeeMock->getTimeLogs();
        return view('time_logs', compact('timeLogs'));
    }

    /**
     * Displays time logs for the given employee
     * @param  integer       $employeeId
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function employeeTimeLogs($employeeId, EmployeeMock $employeeMock)
    {
        $timeLogs = $employeeMock->getEmployeeTimeLogs($employeeId);
        return view('employee_time_logs', compact('timeLogs'));
    }
}
