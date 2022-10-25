<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TransaksiPoint extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user' => '1',
                'keterangan' => 'Bonus 1000',
                'kategori' => 'bonus',
                'kode_promo_referal' => 'bonus1000',
                'total_point' => 1000,
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_user' => '1',
                'keterangan' => 'voucher 50%',
                'kategori' => 'voucher',
                'kode_promo_referal' => 'VCR50',
                'total_point' => 15000,
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_user' => '1',
                'keterangan' => 'Pemakaian point untuk perjalanan',
                'kategori' => 'terpakai',
                'kode_promo_referal' => '',
                'total_point' => "-5000",
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('transaksi_point')->insertBatch($data);
    }
}
