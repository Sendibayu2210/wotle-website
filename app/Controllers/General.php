<?php

namespace App\Controllers;

use App\Models\PromoModel;
use App\Models\UsersModel;
use CodeIgniter\Commands\Server\Serve;

class General extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->PromoModel = new PromoModel();
        $this->UsersModel = new UsersModel();
    }


    public function profile(){        
        $data = [
            'title' => 'Profile Pengguna',
            'link' => 'profile',
            'email' => session()->get('email_wotle'),
        ];
        return view('general/profile',$data);
    }

}
?>