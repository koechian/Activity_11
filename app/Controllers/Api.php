<?php

namespace App\Controllers;

use App\Models\APIModel;

class Api extends BaseController
{
    function index()
    {
        return view('api');
    }

    function tokenValidation($token)
    {
        $model = new APIModel();

        $result = $model->tokenValidation($token);

        return $result;
    }
    function usersList()
    {
        $model = new APIModel();
        $token = $this->request->getVar('token');


        if ($this->tokenValidation($token)) {
            $result = $model->fetchUsersList($token);
        } else {
            $result = 'Token is Invalid or does not exist';
        }

        return $this->response->setJson($result);
    }
    function usersListEmail()
    {
        $email = $this->request->getVar('email');
        $token = $this->request->getVar('token');
        $model = new APIModel();

        if ($this->tokenValidation($token)) {
            $result = $model->fetchUsersListEmail($email);
        } else {
            $result = 'Token is Invalid or does not exist';
        }
        return $this->response->setJson($result);
    }
    function usersListGender()
    {
        $gender = $this->request->getVar('gender');
        $token = $this->request->getVar('token');
        $model = new APIModel();

        if ($this->tokenValidation($token)) {

            $result = $model->fetchUsersListGender($gender);
        } else {
            $result = 'Token is Invalid or does not exist';
        }

        return $this->response->setJson($result);
    }


    function productList()
    {
        $model = new APIModel();

        $result = $model->fetchProductList();

        return $this->response->setJson($result);
    }

    function productListByGender()
    {
        $gender = $this->request->getVar('gender');
        $model = new APIModel();

        $result = $model->fetchProductListbyGender($gender);

        return $this->response->setJson($result);
    }
    function productListBySubCategory()
    {
        $category = $this->request->getVar('subcategory');
        $model = new APIModel();

        $result = $model->fetchProductListbySubCategory($category);

        return $this->response->setJson($result);
    }
    function fetchUserPurchases()
    {
        $token = $this->request->getVar('token');
        $model = new APIModel();

        if ($this->tokenValidation($token)) {

            $result = $model->fetchUserPurchases();
        } else {
            $result = 'Token is Invalid or does not exist';
        }

        return $this->response->setJson($result);
    }
    public function APILogin()
    {
        $username = $this->request->getPost('username');
        $key = $this->request->getPost('key');
        $model = new APIModel();
        $result = $model->auth($username, $key);

        try {
            if (count($result) > 0) {
                $name = $result['username'];
                $apiuserid = $result['apiuser_id'];
                $token = $model->getToken($apiuserid);
                $apiuserdata = [
                    'api-user' => $name,
                    'token' => $token[0]->api_token
                ];
                $session = session();
                $session->set($apiuserdata);
                echo 1;
            } else {
                echo 2;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    public function apiReg()
    {


        $username = $this->request->getPost('username');
        $key = $this->request->getPost('key');


        $handler = new APIModel();

        $result = $handler->addapiUser($username, $key);
        if ($result) {
            echo 1;
        } else {
            echo 2;
        }


        return $result;
    }
    public function logout()
    {
        $session = session();
        $session->destroy();

        return 1;
    }
}
