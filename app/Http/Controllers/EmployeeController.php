<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\EmployeeInterface;

class EmployeeController extends Controller
{
    /**
     * Displays a list of all employees
     * @param  EmployeeInterface $employeeMock
     * @return Illuminate\View\View
     */
    public function index(EmployeeInterface $employeeMock)
    {
        $employees = $employeeMock->getAll();
        return view('employees', compact('employees'));
    }

    /**
     * Displays the details for the selected employee
     * @param  integer       $id          
     * @param  EmployeeInterface $employeeMock 
     * @return Illuminate\View\View                     
     */
    public function details($id, EmployeeInterface $employeeMock)
    {
        $employee = $employeeMock->getDetails($id);
        return view('employee_details', compact('employee'));
    }
}
