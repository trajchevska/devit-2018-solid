<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeMock;
use App\Interfaces\TimeLogsInterface;

class TimeLogsController extends Controller
{
    /**
     * Displays all time logs
     * @param  EmployeeMock $employeeMock
     * @return Illuminate\View\View
     */
    public function timeLogs(TimeLogsInterface $employeeMock)
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
    public function employeeTimeLogs($employeeId, TimeLogsInterface $employeeMock)
    {
        $timeLogs = $employeeMock->getEmployeeTimeLogs($employeeId);
        return view('employee_time_logs', compact('timeLogs'));
    }
}
