<?php

namespace App\Controllers;

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
            'first_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field cannot be left blank'
                ]
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field cannot be blank'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[tbl_users.email]',
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
            $first_name = $this->request->getPost('first_name');
            $last_name = $this->request->getPost('last_name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $gender = $this->request->getPost('gender_select');

            $values = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => Hash::make($password),
                'gender' => $gender
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
                'rules' => 'required|valid_email|is_not_unique[tbl_users.email]',
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
            $email = $this->request->getPost('emailPHP');
            $password = $this->request->getPost('passwordPHP');
            $userModel = new \App\Models\UserModel();

            $user_info = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Incorrect Password');
                return redirect()->to('Register/auth')->withInput();
            } else {
                return redirect()->to('Landing');
            }
        }
    }
}
