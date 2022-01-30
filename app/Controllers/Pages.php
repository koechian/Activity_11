<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

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
    public function search()
    {
        $search_term = $_GET['data'];
        $search_obj = new ProductsModel();
        $values['res'] = $search_obj->searchProducts($search_term);
        return $this->response->setJSON($values);
    }
    public function addToCart()
    {
        $product = $this->request->getPost('productid');
        $customer = $this->request->getPost('customer');

        $newOrder = new ProductsModel();
        if ($newOrder->checkproduct($product, $customer) == 'okay') {
            $result = $newOrder->order($product, $customer);
            try {
                if ($result) {
                    echo 1;
                }
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
        } else {
            echo 'duplicate';
        }
    }
    public function fetchCart()
    {
        $fetch = new ProductsModel();
        $userid = $this->request->getPost('userid');

        $result['result'] = $fetch->fetchCart($userid);

        return $this->response->setJson($result);
    }
    public function removeItem()
    {
        $pop = new ProductsModel();
        $userid = $this->request->getPost('userid');
        $productid = $this->request->getPost('productid');

        $response = $pop->removeItem($userid, $productid);

        return $response;
    }
    public function fetchAllProducts()
    {

        $products = new ProductsModel();
        $result['products'] = $products->fetchAllProducts();

        return $this->response->setJSON($result);
    }
    public function fetchFilteredProducts()
    {
        $filtered = new ProductsModel();
        $modifier = $this->request->getPost('gender');

        $result['products'] = $filtered->fetchFilteredProducts($modifier);

        return $this->response->setJSON($result);
    }

    public function history()
    {
        $customer_id = $this->request->getPost('customer_id');
        $model = new ProductsModel;


        $result['purchases'] = $model->displayPurchases($customer_id);


        return $this->response->setJSON($result);
    }
    function purchase()
    {
        $userid = $this->request->getPost('userid');
        $product_name = $this->request->getPost('product_name');
        $unit_price = $this->request->getPost('unit_price');

        $model = new ProductsModel();

        $result = $model->recordPurchase($userid, $product_name, $unit_price);

        if ($result) {
            echo 1;
        } else {
            return $result;
        }
    }
}
