<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PasienKecantikan extends Model
{
    protected $table = 'perawatan_kecantikan_pasien';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pasien', 'jk', 'umur','tanggal', 'catatan', 'username'];
}