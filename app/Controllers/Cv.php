<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cv extends Controller
{
    public function download()
    {
        $filePath = WRITEPATH . 'uploads/CV-Nazwa Akmalia Padla.pdf';
        return $this->response->download($filePath, null);
    }
}
