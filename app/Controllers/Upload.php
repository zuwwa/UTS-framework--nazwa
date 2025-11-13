<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Upload extends Controller
{
    public function foto($filename)
    {
        $filePath = WRITEPATH . 'uploads/foto/' . $filename;
        if (!is_file($filePath)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound($filename);
        }
        return $this->response->download($filePath, null, true);
    }
}
