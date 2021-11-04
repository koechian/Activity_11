<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    function is_valid($email, $password)
    {
        $this->select('*');
        $this->from('tbl_users');
        $this->where('password', $password);
        $this->where('username', $email);
        $query = $this->get();
        $res = $query->result();
        return $res;
    }
}
