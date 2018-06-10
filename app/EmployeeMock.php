<?php

namespace App;

use Exception;
use App\Interfaces\EmployeeInterface;

/**
 * This class serves the purpose of mocking the database for Employee Records
 */
class EmployeeMock implements EmployeeInterface
{
    /**
     * Returns all employee records
     * @return array
     */
    public function getAll()
    {
        return [
            1 => [
                'id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'leaveRequests' => [
                    [
                        'id' => 1,
                        'date_from' => '2018-06-18',
                        'date_to' => '2018-06-28',
                        'reason' => 'Vacation',
                        'status' => 'Approved',
                    ],[
                        'id' => 2,
                        'date_from' => '2018-09-20',
                        'date_to' => '2018-09-23',
                        'reason' => 'Conference Talk',
                        'status' => 'Pending',
                    ],
                ],
                'timeLogs' => [
                    [
                        'id' => 1,
                        'date' => '2018-06-07',
                        'time' => '4',
                        'task' => 'Task 1',
                        'project' => 'Project 1',
                    ],[
                        'id' => 2,
                        'date' => '2018-06-07',
                        'time' => '4',
                        'task' => 'Task 2',
                        'project' => 'Project 1',
                    ],[
                        'id' => 3,
                        'date' => '2018-06-08',
                        'time' => '5',
                        'task' => 'Task 3',
                        'project' => 'Project 2',
                    ],[
                        'id' => 4,
                        'date' => '2018-06-08',
                        'time' => '2.5',
                        'task' => 'Task 4',
                        'project' => 'Project 1',
                    ],[
                        'id' => 5,
                        'date' => '2018-06-08',
                        'time' => '8',
                        'task' => 'Task 5',
                        'project' => 'Project 2',
                    ],
                ],
            ],
            2 => [
                'id' => 2,
                'first_name' => 'Jane',
                'last_name' => 'Green',
                'email' => 'jane@example.com',
                'timeLogs' => [
                    [
                        'id' => 6,
                        'date' => '2018-06-07',
                        'time' => '6',
                        'task' => 'Task 1',
                        'project' => 'Project 3',
                    ],[
                        'id' => 7,
                        'date' => '2018-06-07',
                        'time' => '2',
                        'task' => 'Task 2',
                        'project' => 'Project 3',
                    ],[
                        'id' => 8,
                        'date' => '2018-06-08',
                        'time' => '8',
                        'task' => 'Task 3',
                        'project' => 'Project 3',
                    ],
                ],
            ],
            3 => [
                'id' => 3,
                'first_name' => 'Jessy',
                'last_name' => 'Brown',
                'email' => 'jessy@example.com',
                'leaveRequests' => [
                    [
                        'id' => 3,
                        'date_from' => '2018-07-22',
                        'date_to' => '2018-07-27',
                        'reason' => 'Wedding',
                        'status' => 'Approved',
                    ]
                ],
                'timeLogs' => [
                    [
                        'id' => 9,
                        'date' => '2018-06-07',
                        'time' => '8',
                        'task' => 'Task 1',
                        'project' => 'Project 3',
                    ],[
                        'id' => 10,
                        'date' => '2018-06-08',
                        'time' => '8',
                        'task' => 'Task 2',
                        'project' => 'Project 2',
                    ],
                ],
            ],
        ];
    }
    
    /**
     * Returns the details for the given employee
     * @param  integer $id employee's id
     * @return array|false false if no record was found
     */
    public function getDetails($id)
    {
        $employees = $this->getAll();
        try {
            return $employees[$id];
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Returns all leave request records
     * @return array
     */
    public function getLeaveRequests()
    {
        $employees = $this->getAll();
        $leaveRequests = [];
        foreach ($employees as $employee) {
            $key = $employee['first_name'].' '.$employee['last_name'];
            $leaveRequests[$key] = $this->getEmployeeLeaveRequests($employee['id']); 
        }
        return $leaveRequests;
    }

    /**
     * Returns the leave requests for the given employeeId
     * @param  integer $employeeId
     * @return array
     */
    public function getEmployeeLeaveRequests($employeeId)
    {
        $employee = $this->getDetails($employeeId);
        try {
            return $employee['leaveRequests'];
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * Returns all time log records
     * @return array
     */
    public function getTimeLogs()
    {
        $employees = $this->getAll();
        $timeLogs = [];
        foreach ($employees as $employee) {
            $key = $employee['first_name'].' '.$employee['last_name'];
            $timeLogs[$key] = $this->getEmployeeTimeLogs($employee['id']); 
        }
        return $timeLogs;
    }

    /**
     * Returns all time logs for the given employeeId
     * @param  integer $employeeId
     * @return array
     */
    public function getEmployeeTimeLogs($employeeId)
    {
        $employee = $this->getDetails($employeeId);
        try {
            return $employee['timeLogs'];
        } catch (Exception $e) {
            return [];
        }
    }
}