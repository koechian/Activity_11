<?php

namespace App\Controllers;

use App\Models\LoginModel;

use App\Controllers\BaseController;



class Login  extends BaseController
{

    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $login = new LoginModel();

        $result = $login->checkin($email, $password);

        try {
            if (count($result) > 1) {
                echo 1;
            } else {
                echo 2;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
