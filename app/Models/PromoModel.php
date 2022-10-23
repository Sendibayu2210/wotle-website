<?php

namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'promo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'kode_promo', 'deskripsi', 'poster', 'tgl_mulai', 'tgl_akhir', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
