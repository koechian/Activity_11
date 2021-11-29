<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/admin');
    }
    public function Products()
    {
        return view('Admin/products');
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
        $categories = new ProductsModel();
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
    public function addProduct()
    {
        $product = new ProductsModel();
        $productname = $this->request->getPost('product_name');
        $product_image = $this->request->getPost('product_image');
        $available_quantity = $this->request->getPost('available_quantity');
        $unit_price = $this->request->getPost('unit_price');
        $subcategory_id = $this->request->getPost('subcategory_id');
        $product_description = $this->request->getPost('product_description');
        $added_by = $this->request->getPost('added_by');
        $gender = $this->request->getPost('gender');

        $result = $product->newProduct($productname, $product_image, $gender, $available_quantity, $unit_price, $subcategory_id, $product_description, $added_by);

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
        $categories = new ProductsModel();
        $result['categories'] = $categories->getCategories();

        return $this->response->setJSON($result);
    }
    public function getProducts()
    {
        $identifier = $_GET['identifier'];
        $products = new ProductsModel();
        $result['products'] = $products->getProducts($identifier);

        return $this->response->setJSON($result);
    }
    public function deleteProduct()
    {
        $id = $this->request->getPost('product_id');
        $products = new ProductsModel();
        $result = $products->deleteProduct($id);

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
    public function deleteCategory()
    {
        $id = $this->request->getPost('category_id');
        $categories = new ProductsModel();
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
