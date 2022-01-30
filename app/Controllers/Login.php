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
    function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new LoginModel();
        $result = $userModel->login($email, $password);

        try {
            if (count($result) > 0) {
                $name = $result['first_name'];
                $userid = $result['user_id'];
                $userdata = [
                    'name' => $name,
                    'userid' => $userid
                ];
                $session = session();
                $session->set($userdata);
                echo 1;
            } else {
                echo 2;
            }
        } catch (\Throwable $th) {
            echo 3;
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login');
    }
}
