<?php

namespace App\Interfaces;

/**
 * A contract for the Employee data manipulation methods
 */
interface LeaveRequestInterface
{
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
}