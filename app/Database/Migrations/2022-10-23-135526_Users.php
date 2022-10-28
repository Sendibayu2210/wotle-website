<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'role' => [
                'type' => 'enum',
                'constraint' => ['admin', 'driver', 'customer'],
            ],
            'foto' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'referal' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'tautan_referal' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'status' => [
                'type' => 'enum',
                'constraint' => ['aktif', 'nonaktif', 'ditangguhkan', 'register'],
            ],
            'point' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'ktp' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'sim' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'plat_nomor' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'tipe_kendaraan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
