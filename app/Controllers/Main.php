<?php

namespace App\Controllers;

use App\Models\UserModel;

class Main extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        return view('index');
    }

    public function auth()
    {
        $validation =$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username is required'
                ]
                ],
                'password' => [
                    'rules' => 'required|min_length[5]|max_length[13]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must have at least 5 character in length',
                        'max_lenght' => 'Password must not have more than 13 character in length'
                    ]
                ]
        ]);

        if(!$validation){
            return view('index',['validation' => $this ->validator]);
        }else{
            $session = session();
            $model = new UserModel;

            $req_username =$this->request->getPost('username');
            $req_password =$this->request->getPost('password');

            $data = $model->where('username', $req_username)->first();

            $password = $data['password'];

            if($password == $req_password){
                $sess_data = [
                    'id'=> $data['id'],
                    'username'=> $data['username'],
                    'password'=> $data['password'],
                    'logged_in' => TRUE
                ];
                $session->set($sess_data);
                return redirect()->to('/admin/dashboard');
            }else{
                $session->setFlashdata('fail','Incorrect username or password');
                return redirect()->to('/main')->withInput();
            }
        }
    }

    public function logout()
    {
        if(session()->has('logged_in')){
            session()->remove('logged_in');
            return redirect()->to('/main')->with('fail', 'You have been logged out.');
        }
    }
}
