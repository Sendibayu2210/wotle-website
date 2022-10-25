<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiPoint extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'id_user' => [
                'type' => 'int',
                'constraint' => 11
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'kategori' => [
                'type' => 'enum',
                'constraint' => ['register', 'bonus', 'referal', 'voucher', 'terpakai'],
            ],
            'kode_promo_referal' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'total_point' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi_point', true);
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_point');
    }
}
