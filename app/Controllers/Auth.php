<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }
    public function index()
    {
        //
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Wotle',
        ];
        return view('homepage/login', $data);
    }

    public function validasi_login()
    {
        // cek email/username
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->UsersModel->where('username', $username)->first();
        if ($user) {
            $cek_pass = $this->UsersModel->where('password', $password)->first();
            if ($cek_pass) {
                $set_session = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                ];
                session()->set($set_session);
                return redirect('dashboard');
            } else {
                session()->setFlashdata('message', 'Password Salah');
                return redirect('login');
            }
        } else {
            session()->setFlashdata('message', 'Email tidak ditemukan');
            session()->setFlashdata('username', $username);
            return redirect('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect('/');
    }
}
