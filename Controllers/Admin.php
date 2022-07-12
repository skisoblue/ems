<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        $model = new EmployeeModel();

        $data['employee'] = $model->getEmployee();

        return view('admin/dashboard', $data);
    }

    public function add_new_employee()
    {
        $model = new EmployeeModel();

        if($this->request->getMethod() == 'post'){
            $model->save([
                'no'=>$this->request->getPost('no'),
                'fullname'=>$this->request->getPost('fullname'),
                'department'=>$this->request->getPost('department'),
                'gender'=>$this->request->getPost('gender'),
                'dob'=>$this->request->getPost('dob'),
                'email'=>$this->request->getPost('email'),
                'datejoined'=>$this->request->getPost('datejoined'),
                'dateresign'=>$this->request->getPost('dateresign')
            ]);

            return redirect()->to('/admin/dashboard');
        }
    }

    public function update_employee()
    {
        $model = new EmployeeModel();

        if($this->request->getMethod() == 'post'){
            $model->save([

                'id'=>$this->request->getPost('id'),
                'no'=>$this->request->getPost('no'),
                'fullname'=>$this->request->getPost('fullname'),
                'department'=>$this->request->getPost('department'),
                'gender'=>$this->request->getPost('gender'),
                'dob'=>$this->request->getPost('dob'),
                'email'=>$this->request->getPost('email'),
                'datejoined'=>$this->request->getPost('datejoined'),
                'dateresign'=>$this->request->getPost('dateresign')
            ]);

            return redirect()->to('/admin/dashboard');
        }
    }

    public function delete_employee()
    {
        $model = new EmployeeModel();

        if($this->request->getMethod() == 'post'){
            $model->delete($this->request->getPost('id'));

            return redirect()->to('/admin/dashboard');

        }
    }
}