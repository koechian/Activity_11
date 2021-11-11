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
    public function Users()
    {
        return view('Admin/users');
    }
    public function getUsers()
    {
        $users = new UsersModel();
        $result['users'] = $users->getUsers();

        return $this->response->setJSON($result);
    }
    public function addCategories()
    {
        $categories = new CategoriesModel();
        $categoryname = $this->request->getPost('category_name');
        $result = $categories->newCategory($categoryname);

        try {
            if ($result) {
                echo 1;
            } else {
                echo 2;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function getCategories()
    {
        $categories = new CategoriesModel();
        $result['categories'] = $categories->getCategories();

        return $this->response->setJSON($result);
    }
    public function deleteCategory()
    {
        $id = $this->request->getPost('category_id');
        $categories = new CategoriesModel();
        $result = $categories->deleteCategory($id);

        try {
            if ($result) {
                echo 1;
            } else {
                echo 2;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
