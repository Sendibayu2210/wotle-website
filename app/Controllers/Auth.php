<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->UsersModel = new UsersModel();
    }
    public function index()
    {
        //
    }

    public function register()
    {
        $data = [
            'title' => 'Register - Wotle',
            'validation' => $this->validation,
        ];
        return view('homepage/register', $data);
    }

    public function cek_register()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama Tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email Tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'password artikel Tidak boleh kosong'
                ]
            ],
            'ktp' => [
                'rules' => 'uploaded[ktp]|mime_in[ktp,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[ktp,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'sim' => [
                'rules' => 'uploaded[sim]|mime_in[sim,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[sim,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
            'plat_nomor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Plat nomor Tidak boleh kosong'
                ]
            ],
            'tipe_kendaraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tipe kendaraan Tidak boleh kosong'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect('register')->withInput();
        }




        // $data = [
        //     'nama' => htmlspecialchars($this->request->getVar('nama')),
        //     'email' => htmlspecialchars($this->request->getVar('email')),
        //     'password' => htmlspecialchars($this->request->getVar('password')),
        //     'ktp' => htmlspecialchars($this->request->getVar('ktp')),
        //     'sim' => htmlspecialchars($this->request->getVar('sim')),
        //     'plat_nomor' => htmlspecialchars($this->request->getVar('plat_nomor')),
        //     'tipe_kendaraan' => htmlspecialchars($this->request->getVar('tipe_kendaraan')),
        //     'foto' => htmlspecialchars($this->request->getVar('foto')),
        //     'referal' => htmlspecialchars($this->request->getVar('referal')),
        //     'tautan_referal' => htmlspecialchars($this->request->getVar('tautan_referal')),
        //     'point' => '0',
        //     'status' => 'nonaktif',
        // ];

        // $insert = $this->UsersModel->insert($data);
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
        return redirect('login');
    }
}
