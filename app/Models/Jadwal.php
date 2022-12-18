<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields = ['nrp', 'namaMahasiswa', 'nomerTelepon', 'dosenPembimbing', 'dosenPenguji', 'tanggal'];
}
