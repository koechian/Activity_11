<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function register($firstname, $lastname, $email, $password, $gender)
    {
        $db = db_connect();
        $role = 5;

        $res = $db->query("INSERT INTO tbl_users (first_name,last_name,email,password,gender,role)VALUES('$firstname','$lastname','$email','$password','$gender','$role')");

        return $res;
    }
}
