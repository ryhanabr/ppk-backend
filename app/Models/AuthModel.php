<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AuthModel extends Model
{
    protected $table = 'auth';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userId','nama_lengkap', 'username', 'email', 'alamat','telp','pass','admin'];
}