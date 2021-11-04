<?php

namespace App\Controllers;

use App\Models\LoginModel;

use App\Controllers\BaseController;


class Login  extends BaseController
{

    public function index()
    {
        /* Load the login screen, if the user is not log in */
        if (isset($_SESSION['login']['id'])) {
            return view('landing');
        } else {
            /* if not, display the login window */
            return view('login');
        }
    }

    public function landing()
    {
        /* Load the dashboard screen, if the user is already log in */
        if (isset($_SESSION['login']['id'])) {
            $this->load->view('landing');
        } else {
            $this->load->view('login');
        }
    }

    function getLogin()
    {
        /* Data that we receive from ajax */
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if (!isset($email) || $email == '' || $email == 'undefined') {
            /* If Username that we recieved is invalid, go here, and return 2 as output */
            echo 2;
            exit();
        }
        if (!isset($password) || $password == '' || $password == 'undefined') {
            /* If Password that we recieved is invalid, go here, and return 3 as output */
            echo 3;
            exit();
        }
        /* Create object of model MLogin.php file under models folder */
        $Login = new LoginModel();
        /* validate($username, $Password) is the function in Mlogin.php */
        $result = array();
        $result = $Login->is_valid($email, $password);
        if ($result = is_array($result) ? count($result) : 1) {
            /* If everything is fine, then go here, and return 1 as output and set session */
            $data = array(
                'id' => $result[0]->id,
                'first_name' => $result[1]->username
            );
            $this->session->set_userdata('login', $data);
            echo 1;
        } else {
            /* If Both Username &  Password that we recieved is invalid, go here, and return 5 as output */
            echo 5;
        }
    }
}
