<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeMock;
use App\Interfaces\LeaveRequestInterface;

class LeaveRequestsController extends Controller
{
    /**
     * Displays all leave requests
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function leaveRequests(LeaveRequestInterface $employeeMock)
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
    public function employeeLeaveRequests($employeeId, LeaveRequestInterface $employeeMock)
    {
        $leaveRequests = $employeeMock->getEmployeeLeaveRequests($employeeId);
        return view('employee_leave_requests', compact('leaveRequests'));
    }
}
