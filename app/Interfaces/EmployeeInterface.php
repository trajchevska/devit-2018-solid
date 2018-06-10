<?php

namespace App\Interfaces;

/**
 * A contract for the Employee data manipulation methods
 */
interface EmployeeInterface
{
    /**
     * Returns all employee records
     * @return array
     */
    public function getAll();

    /**
     * Returns the details for the given employee
     * @param  integer $id
     * @return array
     */
    public function getDetails($id);

    /**
     * Returns all leave requests
     * @return array
     */
    public function getLeaveRequests();

    /**
     * Returns all leave requests for the given employee
     * @param  intege $employeeId
     * @return array
     */
    public function getEmployeeLeaveRequests($employeeId);

    /**
     * Returns all time log records
     * @return array
     */
    public function getTimeLogs();

    /**
     * Returns all time logs for the given employee
     * @param  integer $employeeId
     * @return array
     */
    public function getEmployeeTimeLogs($employeeId);
}