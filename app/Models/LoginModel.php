<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function login($email, $password)
    {
        $db = db_connect();

        $res = $db->query("SELECT * FROM tbl_users WHERE email='$email' AND password='$password'");

        $row = $res->getRowArray();

        return $row;
    }
}
