<?php

namespace App\Models;

use CodeIgniter\Model;

class SosialModel extends Model
{
    protected $table = 'sosial_media';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'link'];
}
