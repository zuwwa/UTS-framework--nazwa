<?php

namespace App\Controllers;
use App\Models\KeahlianModel;
use App\Models\BiodataModel;
use App\Models\SosialModel;

class Keahlian extends BaseController
{
    public function index()
    {
        $keahlianModel = new KeahlianModel();
        $biodataModel = new BiodataModel();
        $sosialMediaModel = new SosialModel();

        $data['keahlian'] = $keahlianModel->findAll();
        $data['biodata'] = $biodataModel->first();       
        $data['sosial_media'] = $sosialMediaModel->findAll(); 

        return view('keahlian', $data);
    }
}
