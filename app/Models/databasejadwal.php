<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ProductModel;
 /**
  * 
  */
class databasejadwal extends Model
{
protected $table      = 'jadwal';
protected $primaryKey = 'id';//nrp
protected $useAutoIncrement = true;
protected $allowedFields = ['nama_mahasiswa', 'nomer_telepon', 'dosen_pembimbing', 'dosen_penguji', 'tanggal'];
}
?>
