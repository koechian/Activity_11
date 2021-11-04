<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Landing  extends BaseController
{
    public function index()
    {
        // if (isset($_SESSION['id'])) {

        //     return view('landing');
        // } else {
        //     return view('login');
        // }
        return view('landing');
    }
}
