<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'jk', 'kategori', 'jadwal'];
}