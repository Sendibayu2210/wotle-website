<?php

namespace App\Controllers;

use App\Models\PromoModel;
use App\Models\UsersModel;
use CodeIgniter\Commands\Server\Serve;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->PromoModel = new PromoModel();
        $this->UsersModel = new UsersModel();
    }

    public function index()
    {
        if (!session()->get('username')) {
            return redirect('login');
        }
        $data = [
            'title' => 'Wotle | Dashboard',
            'link' => 'dashboard',
        ];
        return view('admin/dashboard', $data);
    }

    public function users()
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Daftar Users',
            'link' => 'users',

        ];
        return view('admin/users', $data);
    }



    // ================== PROMO ===========
    public function promo()
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Promo',
            'link' => 'promo',
            'promo' => $this->PromoModel->findAll(),
        ];
        return view('admin/promo', $data);
    }
    public function tambah_promo()
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Tambah Promo',
            'link' => 'promo',
            'validation' => $this->validation,
        ];
        return view('admin/promo-tambah', $data);
    }
    public function edit_promo($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        $promo = $this->PromoModel->find($id);
        if ($promo) {
            $data = [
                'title' => 'Edit Promo',
                'link' => 'promo',
                'validation' => $this->validation,
                'promo' => $promo
            ];
            return view('admin/promo-edit', $data);
        }
    }
    public function save_promo()
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Tidak boleh kosong'
                ]
            ],
            'kode_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode promo Tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'tgl_mulai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'tgl_akhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->PromoModel->insert([
            'judul' => htmlspecialchars($this->request->getVar('judul')),
            'kode_promo' => htmlspecialchars($this->request->getVar('kode_promo')),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'poster' => $fileName,
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'tgl_akhir' => $this->request->getVar('tgl_akhir'),
            'status' => 'aktif',
        ]);
        $dataBerkas->move('img/promo/', $fileName);
        session()->setFlashdata('message', 'Data Promo Berhasil di Upload');
        return redirect('admin-promo');
    }

    public function update_promo($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Tidak boleh kosong'
                ]
            ],
            'kode_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode promo Tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'tgl_mulai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'tgl_akhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi artikel Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        if ($dataBerkas->getError() == 4) {
            $fileName = $this->request->getVar('file_lama');
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/promo/', $fileName);

            $posterLama = 'img/promo/' . $this->request->getVar('file_lama');
            if (file_exists($posterLama)) {
                unlink($posterLama);
            }
        }
        $data = [
            'judul' => htmlspecialchars($this->request->getVar('judul')),
            'kode_promo' => htmlspecialchars($this->request->getVar('kode_promo')),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'poster' => $fileName,
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'tgl_akhir' => $this->request->getVar('tgl_akhir'),
            'status' => 'aktif',
        ];
        $update = $this->PromoModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data promo Berhasil di Upload');
        } else {
            session()->setFlashdata('message', 'Data promo Gagal di Upload');
        }
        return redirect('admin-promo');
    }

    public function hapus_promo()
    {
        if (session()->get('role') != 'admin') {
            return redirect('dashboard');
        }
        $id = $this->request->getVar('id');
        $promo = $this->PromoModel->find($id);
        $poster = 'img/promo/' . $promo['poster'];
        if (file_exists($poster)) {
            unlink($poster);
        }
        $hapus = $this->PromoModel->delete($id);
        if ($hapus) {
            session()->setFlashdata('message', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('message', 'Data gagal dihapus');
        }
        return redirect()->to('/admin-promo');
    }


    // users
    // ajax get users
    public function getUsers($role)
    {
        if ($this->request->isAJAX()) {
            $users = $this->UsersModel->where('role', $role)->findAll();
            return json_encode([
                'success' => 'success',
                'scrf' => csrf_hash(),
                'users' => $users,
            ]);
        }
    }
    public function get_Users($role)
    {
        if ($this->request->isAJAX()) {
            $users = $this->UsersModel->where('role', $role)->findAll();
            return json_encode([
                'success' => 'success',
                'scrf' => csrf_hash(),
                'users' => $users,
                'role' => $role,
            ]);
        }
    }





    public function payment()
    {
        $data = [
            'title' => 'Pembayaran',
            'link' => 'payment',
        ];
        return view('admin/payment', $data);
    }
    public function favorite()
    {
        $data = [
            'title' => 'Favorite',
            'link' => 'favorite',
            'favorite' => [
                [
                    'tujuan' => 'Kuningan - Bandung',
                    'gambar' => 'bandung.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Jakarta',
                    'gambar' => 'jakarta.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Cikarang',
                    'gambar' => 'cikarang.jpg'
                ],
            ],
        ];
        return view('admin/favorite', $data);
    }
    public function tiket()
    {
        $data = [
            'title' => 'tiket',
            'link' => 'tiket',
            'tiket' => [
                [
                    'tujuan' => 'Kuningan - Bandung',
                    'gambar' => 'bandung.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Jakarta',
                    'gambar' => 'jakarta.jpg'
                ],
                [
                    'tujuan' => 'Kuningan - Cikarang',
                    'gambar' => 'cikarang.jpg'
                ],
            ],
        ];
        return view('admin/ticket', $data);
    }
}
