<?php

namespace App\Controllers;

use App\Models\CategoriesModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/admin');
    }
    public function Categories()
    {
        return view('Admin/categories');
    }
    public function addCategories()
    {
        $categories = new CategoriesModel();
        $data = [
            'category_name' => $this->request->getPost('category_name')
        ];
        $categories->save($data);
        $data = ['status' => 'Category Added'];
    }
}
