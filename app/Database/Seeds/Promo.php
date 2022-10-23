<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class Promo extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Diskon 30%',
                'kode_promo' => 'DISKON30',
                'deskripsi' => 'lorem lorem lorem',
                'poster' => 'https://www.static-src.com/siva/asset//09_2019/1200x460_Header_Microsite_Wonderful_Indonesia.jpg',
                'tgl_mulai' => '2022-10-23',
                'tgl_akhir' => '2022-10-30',
                'status' => 'aktif',
                "created_at" => Time::now(),
                "updated_at" => Time::now(),
            ],
            [
                'judul' => 'Diskon 50%',
                'kode_promo' => 'DISKON50',
                'deskripsi' => 'lorem lorem lorem',
                'poster' => 'https://www.static-src.com/siva/asset//09_2019/1200x460_Header_Microsite_Wonderful_Indonesia.jpg',
                'tgl_mulai' => '2022-10-23',
                'tgl_akhir' => '2022-10-30',
                'status' => 'aktif',
                "created_at" => Time::now(),
                "updated_at" => Time::now(),
            ],
        ];
        $this->db->table('promo')->insertBatch($data);
    }
}
