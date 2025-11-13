<?php

namespace App\Controllers;
use App\Models\PortofolioModel;
use App\Models\BiodataModel;
use App\Models\SosialModel;

class Portofolio extends BaseController
{
    public function index()
    {
        $portofolioModel = new PortofolioModel();
        $biodataModel = new BiodataModel();
        $sosialMediaModel = new SosialModel();

        $data['portofolio'] = $portofolioModel->findAll();
        $data['biodata'] = $biodataModel->first();           
        $data['sosial_media'] = $sosialMediaModel->findAll(); 

        return view('portofolio', $data);
    }
}
