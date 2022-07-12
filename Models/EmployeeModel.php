<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{

    protected $table ='employee';
    protected $allowedFields = ['id', 'no', 'fullname', 'department','gender','dob','email','datejoined','dateresign'];

    public function getEmployee()
    {
        return $this->findAll();
    }
}

