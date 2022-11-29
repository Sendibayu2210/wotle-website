<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Promo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => '5',
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'varchar',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'text',                
            ],
            'gambar' => [
                'type' => 'varchar',                
                'constraint' => '255',
            ],
            'tgl_mulai' => [
                'type' => 'datetime',                
            ],
            'tgl_akhir' => [
                'type' => 'datetime',                
            ],
            'kode_promo' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
            'jumlah_poin' => [
                'type' => 'varchar',                
                'constraint' => '50',
            ],
            'jumlah_persen' => [
                'type' => 'varchar',                
                'constraint' => '50',
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],

        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('promo',true);
    }

    public function down()
    {
        $this->forge->dropTable('promo');
    }
}
