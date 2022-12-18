<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GambarKota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true,
            ],
            'nama_kota' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'gambar' => [
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
        $this->forge->addKey('id',true);
        $this->forge->createTable('gambar_kota', true);        
    }

    public function down()
    {
        $this->forge->dropTable('gambar_kota');
    }
}
 