<?php
namespace App\Models;
use CodeIgniter\Model;

class MinatModel extends Model
{
    protected $table = 'minat';
    protected $allowedFields = ['nama_minat', 'icon'];
}
