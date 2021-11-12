<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Landing  extends BaseController
{
    public function index()
    {
        return view('landing');
    }
    public function Cart()
    {
        return view('cart');
    }
}
