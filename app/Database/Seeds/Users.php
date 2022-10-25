<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'driverwotle',
                'password' => 'driver',
                'nama' => 'driver wotle',
                'role' => 'driver',
                'foto' => 'driver1.jpg',
                'referal' => 'DRWOTL',
                'tautan_referal' => '',
                'status' => 'aktif',
                'point' => '5000',
                'ktp' => 'ktpdriver1.jpg',
                'sim' => 'simdriver1.jpg',
                'plat_nomor' => 'E74289',
                'tipe_kendaraan' => 'alphard x783',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'username' => 'driverwotle2',
                'password' => 'driver2',
                'nama' => 'driver wotle 2',
                'role' => 'driver',
                'foto' => 'driver2.jpg',
                'referal' => 'DRWOTL2',
                'tautan_referal' => '',
                'status' => 'aktif',
                'point' => '10000',
                'ktp' => 'ktpdriver2.jpg',
                'sim' => 'simdriver2.jpg',
                'plat_nomor' => 'E74289',
                'tipe_kendaraan' => 'alphard x783',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'username' => 'admin',
                'password' => 'admin',
                'nama' => 'Admin wotle',
                'role' => 'admin',
                'foto' => 'admin.jpg',
                'referal' => 'ADM51',
                'tautan_referal' => '',
                'status' => 'aktif',
                'point' => '10000',
                'ktp' => '',
                'sim' => '',
                'plat_nomor' => '',
                'tipe_kendaraan' => '',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
