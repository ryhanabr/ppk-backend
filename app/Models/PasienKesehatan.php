<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PasienKesehatan extends Model
{
    protected $table = 'konsultasi_kesehatan_pasien';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pasien', 'jk', 'umur', 'kategori', 'tanggal', 'keluhan', 'username'];
}