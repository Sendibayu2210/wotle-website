<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ListDestination extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => 'true',                
            ],
            'id_driver' => [
                'type' => 'int',
                'constraint' => '11',
            ],
            'tujuan_awal' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
            'tujuan_akhir' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
            'tgl_berangkat' => [
                'type' => 'date',
            ],
            'waktu_berangkat' => [
                'type' => 'varchar',
                'constraint' => '10',
            ],
            'jumlah_kursi' => [
                'type' => 'int',
                'constraint' => '2',
            ],
            'tipe_kendaraan' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
            'plat_nomor' => [
                'type' => 'varchar',
                'constraint' => '20',
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('list_destination', true);        
    }

    public function down()
    {
        $this->forge->dropTable('list_destination');
    }
}
