<?php

namespace App\Controllers;

use App\Models\PromoModel;
use App\Models\UsersModel;
use App\Models\ListdestinationModel;
use CodeIgniter\Commands\Server\Serve;
use CodeIgniter\I18n\Time;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->PromoModel = new PromoModel();
        $this->UsersModel = new UsersModel();
        $this->ListdestinationModel = new ListdestinationModel();
    }

    public function index()
    {
        if (!session()->get('email_wotle')) {
            return redirect('login');
        }
        $session_user = session()->get('email_wotle');
        $user = $this->UsersModel->where('email', $session_user)->first();
        $data = [
            'title' => 'Wotle | Dashboard',
            'link' => 'dashboard',
            'user' => $user,
            'validation' => $this->validation,
        ];
        if(session()->get('role_wotle') == 'admin'){
            return view('admin/dashboard', $data);
        }else{
            return view('driver/dashboard_driver', $data);            
        }
    }

    public function users()
    {
        if (session()->get('role_wotle') != 'admin') {
            return redirect('dashboard');
        }
        $data = [
            'title' => 'Daftar Users',
            'link' => 'users',

        ];
        return view('admin/users', $data);
    }

    public function upload_file_driver()
    {
        if (!$this->validate([
            'file_ktp' => [
                'rules' => 'uploaded[file_ktp]|mime_in[file_ktp,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[file_ktp,3072]',
                'errors' => [
                    'uploaded' => 'upload file KTP',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],
            'file_sim' => [
                'rules' => 'uploaded[file_sim]|mime_in[file_sim,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[file_sim,3072]',
                'errors' => [
                    'uploaded' => 'upload file SIM',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],
            'file_stnk' => [
                'rules' => 'uploaded[file_stnk]|mime_in[file_stnk,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[file_stnk,3072]',
                'errors' => [
                    'uploaded' => 'upload file STNK',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],  
            'file_skck' => [
                'rules' => 'uploaded[file_skck]|mime_in[file_skck,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[file_skck,3072]',
                'errors' => [
                    'uploaded' => 'upload file SKCK',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 3 MB'
                ]
            ],           
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $dataBerkasKtp = $this->request->getFile('file_ktp');
        $fileNameKtp = $dataBerkasKtp->getRandomName();
        $dataBerkasKtp->move('wotle_assets/img/ktp_driver/', $fileNameKtp);

        $dataBerkasSim = $this->request->getFile('file_sim');
        $fileNameSim = $dataBerkasSim->getRandomName();
        $dataBerkasSim->move('wotle_assets/img/sim_driver/', $fileNameSim);

        $dataBerkasStnk = $this->request->getFile('file_stnk');
        $fileNameStnk = $dataBerkasStnk->getRandomName();
        $dataBerkasStnk->move('wotle_assets/img/stnk_driver/', $fileNameStnk);

        $dataBerkasSkck = $this->request->getFile('file_skck');
        $fileNameSkck = $dataBerkasSkck->getRandomName();
        $dataBerkasSkck->move('wotle_assets/img/Skck_driver/', $fileNameSkck);
        



        $id = $this->request->getVar('id-user');
        $data = [            
            'ktp' => 'http://localhost:8080/wotle_assets/img/ktp_driver/'.$fileNameKtp,
            'sim' => 'http://localhost:8080/wotle_assets/img/sim_driver/'. $fileNameSim,                    
            'stnk' => 'http://localhost:8080/wotle_assets/img/stnk_driver/'. $fileNameStnk,                    
            'skck' => 'http://localhost:8080/wotle_assets/img/skck_driver/'. $fileNameSkck,                    
            
        ];
        $insert = $this->UsersModel->update($id, $data);
        if ($insert) {            
            return redirect('dashboard');
        } else {
            return redirect('dashboard');
        }
    }   


    // ================== PROMO ===========
    public function promo()
    {
        if (session()->get('role_wotle') != 'admin') {
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
        if (session()->get('role_wotle') != 'admin') {
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
        if (session()->get('role_wotle') != 'admin') {
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
        if (session()->get('role_wotle') != 'admin') {
            return redirect('dashboard');
        }

        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Tidak boleh kosong',
                ],
            ],
            'kode_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode promo Tidak boleh kosong',
                ],
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong',
                ],
            ],
            'poin_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih dahulu kategori',
                ],
            ],
            'nilai_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukan jumlah nilai',
                ],
            ],
            'tgl_mulai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Periode mulai promo harus diisi',
                ],
            ],
            'tgl_akhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Periode akhir promo harus diisi',
                ],
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB',
                ],
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $kategori  = $this->request->getVar('poin_promo');
        $nilai_promo = $this->request->getVar('nilai_promo');
        if($kategori == 'poin'){
            $poin = $nilai_promo;
            $persen = '';
        }else{
            $poin = '';
            $persen = $nilai_promo;
        }

        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->PromoModel->insert([
            'judul' => htmlspecialchars($this->request->getVar('judul')),
            'kode_promo' => htmlspecialchars($this->request->getVar('kode_promo')),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => 'wotle/wotle_assets/img/promo/'.$fileName,
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'tgl_akhir' => $this->request->getVar('tgl_akhir'),
            'jumlah_poin' => $poin,
            'jumlah_persen' => $persen,
            'status' => 'aktif',
            'created_at' => Time::now(),            
            'updated_at' => Time::now(),            
        ]);
        $dataBerkas->move('wotle_assets/img/promo/', $fileName);
        session()->setFlashdata('message', 'Data Promo Berhasil di Upload');
        return redirect('admin-promo');
    }

    public function detail_promo(){
        $id = $this->request->getVar('id');
        $promo = $this->PromoModel->find($id);
        if($promo){
            return json_encode([
                'code' => '200',
                'message' => 'data-found',
                'promo' => $promo,
            ]);
        }else{
            return json_encode([
                'code' => '404',
                'message' => 'data-not-found',
            ]);
        }
    }

    public function update_promo($id)
    {
        if (session()->get('role_wotle') != 'admin') {
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
            'poin_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih dahulu kategori',
                ],
            ],
            'nilai_promo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukan jumlah nilai',
                ],
            ],
            'tgl_mulai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isikan Tanggal'
                ]
            ],
            'tgl_akhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isikan Tanggal'
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
            $randomName = $dataBerkas->getRandomName();
            $dataBerkas->move('wotle_assets/img/promo/', $randomName);
            $fileName = 'wotle_assets/img/promo/'.$randomName;

            $posterLama = $this->request->getVar('file_lama');
            if (file_exists($posterLama)) {
                unlink($posterLama);
            }
        }

        $kategori  = $this->request->getVar('poin_promo');
        $nilai_promo = $this->request->getVar('nilai_promo');
        if($kategori == 'poin'){
            $poin = $nilai_promo;
            $persen = '';
        }else{
            $poin = '';
            $persen = $nilai_promo;
        }


        $data = [
            'judul' => htmlspecialchars($this->request->getVar('judul')),
            'kode_promo' => htmlspecialchars($this->request->getVar('kode_promo')),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' =>  $fileName,
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'tgl_akhir' => $this->request->getVar('tgl_akhir'),
            'jumlah_poin' => $poin,
            'jumlah_persen' => $persen,
            'status' => 'aktif',                    
            'updated_at' => Time::now(), 
        ];
        $update = $this->PromoModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data promo Berhasil diubah');
        } else {
            session()->setFlashdata('message', 'Data promo Gagal diubah');
        }
        return redirect('admin-promo');
    }

    public function hapus_promo()
    {
        if (session()->get('role_wotle') != 'admin') {
            return redirect('dashboard');
        }
        $id = $this->request->getVar('id');
        $promo = $this->PromoModel->find($id);
        $poster = $promo['gambar'];
        if (file_exists($poster)) {
            unlink($poster);
        }
        $hapus = $this->PromoModel->delete($id);
        if ($hapus) {
            session()->setFlashdata('message', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('message', 'Data gagal dihapus');
        }
        return redirect()->to('admin-promo');
    }


    // users
    // ajax get users
    public function getUsers($role)
    {
        $status = $this->request->getVar('status');
        if ($this->request->isAJAX()) {
            $users = $this->UsersModel->where('role', $role)->where('status', $status)->findAll();
            $count_user_aktif = $this->UsersModel->where('role', $role)->where('status', 'aktif')->countAllResults();
            $count_user_nonaktif = $this->UsersModel->where('role', $role)->where('status', 'nonaktif')->countAllResults();
            $count_user_ditangguhkan = $this->UsersModel->where('role', $role)->where('status', 'ditangguhkan')->countAllResults();
            return json_encode([
                'message' => 'success',
                'scrf' => csrf_hash(),
                'users' => $users,
                'count_user_aktif' => $count_user_aktif,
                'count_user_nonaktif' => $count_user_nonaktif,
                'count_user_ditangguhkan' => $count_user_ditangguhkan,
                'status' => $status,
            ]);
        }
    }

    public function detail_user($id)
    {
        $user = $this->UsersModel->find($id);
        return json_encode([
            'user' => $user,
        ]);
    }

    public function update_status_user()
    {
        $id_driver = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $driver = $this->UsersModel->find($id_driver);
        $data = [
            'status' => $status
        ];
        $aktivasi = $this->UsersModel->update($id_driver, $data);
        if ($aktivasi) {
            return json_encode([
                'message' => 'driver ' . $driver['nama'] . ' berhasil di' . $status,
                'id' => $id_driver,
                'role' => $driver['role'],
            ]);
        } else {
            return json_encode([
                'message' => 'driver ' . $driver['nama'] . ' gagal di' . $status,
                'id' => $id_driver,
                'role' => $driver['role'],
            ]);
        }
    }

    public function cari_users()
    {
        $role = $this->request->getVar('role');
        $search = $this->request->getVar('search');
        $status = $this->request->getVar('status');
        $users = $this->UsersModel->where('role', $role)->where('status', $status)->like('nama', $search)->findAll();
        $count_user_aktif = $this->UsersModel->where('role', $role)->where('status', 'aktif')->countAllResults();
        $count_user_nonaktif = $this->UsersModel->where('role', $role)->where('status', 'nonaktif')->countAllResults();
        $count_user_ditangguhkan = $this->UsersModel->where('role', $role)->where('status', 'ditangguhkan')->countAllResults();
        if ($users) {
            return json_encode([
                'message' => 'success_search',
                'users' => $users,
                'count_user_aktif' => $count_user_aktif,
                'count_user_nonaktif' => $count_user_nonaktif,
                'count_user_ditangguhkan' => $count_user_ditangguhkan,
                'status' => $status,
            ]);
        } else {
            return json_encode([
                'message' => 'search_not_found',
                'search' => $search,
                'count_user_aktif' => $count_user_aktif,
                'count_user_nonaktif' => $count_user_nonaktif,
                'count_user_ditangguhkan' => $count_user_ditangguhkan,
                'status' => $status,
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


    // Bagina Destinasi

    public function group_destinasi()
    {
        $group = $this->ListdestinationModel->groupBy('tujuan_akhir')->findAll();
        return json_encode([
            'code' => '200',
            'message' => 'success',
            'destinasi' => $group,
        ]);
    }

}
