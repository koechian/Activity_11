<?php

namespace App\Controllers;

use Config\Validation;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
}
