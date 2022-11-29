<?php

namespace App\Models;

use CodeIgniter\Model;

class ListdestinationModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'list_destination';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_driver','tujuan_awal','tujuan_akhir','tgl_berangkat','waktu_berangkat','jumlah_kursi','tipe_kendaraan','plat_nomor'];    
}
