<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Libraries\Hash;


class Register extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('register');
    }
    public function new_user()
    {
        $validate = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is needed'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'erors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'This email is invalid',
                    'is_unique' => 'This email is already in use.'

                ],
                'password' => [
                    'rules' => 'required|min_length[5]',
                    'errors' => [
                        'required' => 'A password must be provided',
                        'min_length' => 'Password must be longer than 5 characters'

                    ],
                    'cpassword' => [
                        'rules' => 'required|matches[password]',
                        'errors' => [
                            'Passwords do not match',
                            'required' => 'This is a required field'
                        ]
                    ]
                ]
            ]



        ]);

        if (!$validate) {
            return view('register', ['validate' => $this->validator]);
        } else {
            $name = $this->request->getPost('first_name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ];

            $userModel = new \App\Models\UserModel();
            $query = $userModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Something Went Wrong');
            } else {
                return redirect()->to('register')->with('success', 'You are now registered and can proceed to login');
            }
        }
    }
    function auth()
    // Login validation
    {
        $validate = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'This email is invalid',
                    'is_not_unique' => 'We could not find an account with that email'

                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[60]',
                'errors' => [
                    'required' => 'A password must be provided',
                    'min_length' => 'Password must be longer than 5 characters',
                    'max_length' => 'Password is too long'

                ]
            ]
        ]);
        if (!$validate) {
            return view('login', ['validate' => $this->validator]);
        } else {
            echo 'Login Success';
        }
    }
}
