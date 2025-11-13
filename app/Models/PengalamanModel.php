<?php

namespace App\Models;
use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table = 'pengalaman';
    protected $allowedFields = ['jenis', 'tempat', 'posisi', 'tahun', 'deskripsi'];
}
