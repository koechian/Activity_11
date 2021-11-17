<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Pages extends BaseController
{
    public function index()
    {
        return view('landing');
    }
    public function Children()
    {
        return view('children');
    }
    public function Men()
    {
        return view('men');
    }
    public function Women()
    {
        return view('women');
    }
    public function Profile()
    {
        return view('profile');
    }
    public function About()
    {
        return view('about');
    }
    public function Cart()
    {
        return view('cart');
    }
}
