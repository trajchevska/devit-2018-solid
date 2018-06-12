<?php

namespace App\Interfaces;

/**
 * A contract for the Employee data manipulation methods
 */
interface TimeLogsInterface
{
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