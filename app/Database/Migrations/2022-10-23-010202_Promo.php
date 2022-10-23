<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Promo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,            
                'auto_increment' => true,
            ],

            'kode_promo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],            
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],            
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'poster' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tgl_mulai' => [
                'type' => 'date',                
            ],
            'tgl_akhir' => [
                'type' => 'date',                
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['aktif', 'expired']
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],          
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('promo', true);
    }

    public function down()
    {
        $this->forge->dropTable('promo');
    }
}
