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
        if (session()->get('username')) {
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Register - Wotle',
            'validation' => $this->validation,
        ];
        return view('homepage/register', $data);
    }

    public function cek_register()
    {
        // cek username / email sudah ada atau belum 
        $username = $this->request->getVar('email');
        $user = $this->UsersModel->where('username', $username)->first();
        if ($user) {
            return json_encode([
                'message' => 'username ada',
            ]);
        } else {
            return json_encode([
                'message' => 'validasi_register_success',
            ]);
        }
    }

    public function save_register()
    {

        if (!$this->validate([
            'ktp' => [
                'rules' => 'uploaded[ktp]|mime_in[ktp,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[ktp,3072]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],
            'sim' => [
                'rules' => 'uploaded[sim]|mime_in[sim,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[sim,3072]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[foto,3072]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            return redirect('register')->withInput();
        }

        $dataBerkasKtp = $this->request->getFile('ktp');
        $fileNameKtp = $dataBerkasKtp->getRandomName();
        $dataBerkasKtp->move('img/ktp_driver/', $fileNameKtp);

        $dataBerkasSim = $this->request->getFile('sim');
        $fileNameSim = $dataBerkasSim->getRandomName();
        $dataBerkasSim->move('img/sim_driver/', $fileNameSim);

        $dataBerkasFoto = $this->request->getFile('foto');
        $fileNameFoto = $dataBerkasFoto->getRandomName();
        $dataBerkasFoto->move('img/foto/', $fileNameFoto);

        $data = [
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'username' => htmlspecialchars($this->request->getVar('email')),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'ktp' => $fileNameKtp,
            'sim' => $fileNameSim,
            'plat_nomor' => htmlspecialchars($this->request->getVar('plat_nomor')),
            'tipe_kendaraan' => htmlspecialchars($this->request->getVar('tipe_kendaraan')),
            'foto' => $fileNameFoto,
            'referal' => random_character(),
            'tautan_referal' => htmlspecialchars($this->request->getVar('kode_referal')),
            'point' => '0',
            'status' => 'register',
            'role' => 'driver',
        ];
        $insert = $this->UsersModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message_auth', 'Registrasi berhasil. proses validasi paling lambat 1x24jam <br> konfirmasi selanjutnya akan diberitahukan melalui email.');
            return redirect('login');
        } else {
            return redirect('register');
        }
    }
    public function login()
    {
        if (session()->get('username')) {
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Login | Wotle',
            'validation' => $this->validation,
        ];
        return view('homepage/login', $data);
    }

    public function validasi_login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // cek email/username
        $user = $this->UsersModel->where('username', $username)->first();
        if ($user) {
            if ($user['status'] == 'aktif') {
                if (password_verify($password, $user['password'])) {
                    $set_session = [
                        'username' => $user['username'],
                        'role' => $user['role'],
                    ];
                    session()->set($set_session);
                    return json_encode([
                        'message' => 'login-success',
                        'redirect' => 'dashboard',
                    ]);
                } else {
                    return json_encode([
                        'message' => 'password salah',
                    ]);
                }
            } else if ($user['status'] == 'nonaktif') {
                return json_encode([
                    'message' => 'akun nonaktif',
                ]);
            } else if ($user['status'] == 'ditangguhkan') {
                return json_encode([
                    'message' => 'akun ditangguhkan',
                ]);
            }
        } else {
            return json_encode([
                'message' => 'email tidak ditemukan',
                'username' => $username,
            ]);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect('login');
    }
}
