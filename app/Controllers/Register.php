<?php

namespace App\Controllers;

use App\Models\RegistrationModel;
use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }
    public function new_user()
    {
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $gender = $this->request->getPost('gender');

        $add = new RegistrationModel();

        $result = $add->register($firstname, $lastname, $email, $password, $gender);

        try {
            if ($result) {
                echo 1;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
