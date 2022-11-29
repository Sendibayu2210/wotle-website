<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ListDestination extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_driver' => '1',
                'tujuan_awal' => 'Kuningan',
                'tujuan_akhir' => 'Jakarta',
                'tgl_berangkat' => '2022-11-25',
                'waktu_berangkat' => '08.00',
                'jumlah_kursi' => '7',
                'tipe_kendaraan' => 'Grand Max Series X',
                'plat_nomor' => 'AB 7494 CH',
            ],
            [
                'id_driver' => '1',
                'tujuan_awal' => 'Kuningan',
                'tujuan_akhir' => 'Jakarta',
                'tgl_berangkat' => '2022-11-29',
                'waktu_berangkat' => '08.00',
                'jumlah_kursi' => '7',
                'tipe_kendaraan' => 'Grand Max Series X',
                'plat_nomor' => 'AB 7494 CH',
            ],
            [
                'id_driver' => '1',
                'tujuan_awal' => 'Kuningan',
                'tujuan_akhir' => 'Bekasi',
                'tgl_berangkat' => '2022-12-05',
                'waktu_berangkat' => '08.00',
                'jumlah_kursi' => '7',
                'tipe_kendaraan' => 'Grand Max Series X',
                'plat_nomor' => 'AB 7494 CH',
            ],
        ];

        $this->db->table('list_destination')->insertBatch($data);
    }
}
