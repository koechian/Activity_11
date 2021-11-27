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
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $login = new LoginModel();

        $result = $login->checkin($email, $password);

        try {
            if (count($result) > 1) {
                echo 1;
                $username = $result['first_name'];
                $session->set('name', $username);
            } else {
                echo 2;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login');
    }
}
