<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'id_destinasi' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'id_driver' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'id_customer' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'penjemputan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'tujuan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'jumlah_kursi' => [
                'type' => 'int',
                'constraint' => 2,
            ],
            'id_metode_bayar' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'deskripsi' => [
                'type' => 'varchar',
                'constraint' => 150,
            ],
            'harga' => [
                'type' => 'int',
                'constraint' => 10,
            ],
            'status' => [
                'enum' => ['success','pending','fail'],
            ],
            'tgl_pesan' => [
                'type' => 'date'
            ],        
            'created_at' => [
                'type' => 'date',
            ],
            'updated_at' => [
                'type' => 'date',
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('riwayat_pesanan',true);
    }

    public function down()
    {
        $this->forge->dropTable('riwayat_pesanan');
    }
}
