<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Pages extends BaseController
{
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
}
