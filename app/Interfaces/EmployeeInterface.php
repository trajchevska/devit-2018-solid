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
}