<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        $data = $this->request->getPost(['login', 'password']);

        if (!$this->validateData($data, [
            'login' => 'required',
            'password' => 'required'
        ])) {
            return $this->index();
        }

        $login = $this->request->getPost('login') ?? '';
        $password = $this->request->getPost('password') ?? '';

        // Check if login is an email or a username
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $credentials = ['email' => $login];
        } else {
            $credentials = ['username' => $login];
        }

        $user = $this->model->where($credentials)->first();

        if (!$user) {
            session()->setFlashdata('error', 'Email/Username atau password anda salah.');
            return redirect()->back();
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (!$passwordCheck) {
            session()->setFlashdata('error', 'Email/Username atau password anda salah.');
            return redirect()->back();
        }

        $userData = [
            'username' => $user['username'],
            'email' => $user['email'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('admin/BooksController'));
    }
}