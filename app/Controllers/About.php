<?php

namespace App\Controllers;

use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;
use App\Models\PortofolioModel;
use App\Models\SosialModel;
use App\Models\BiodataModel;

class About extends BaseController
{
    public function index()
    {
        $pendidikan = (new PendidikanModel())->findAll();
        $pengalaman = (new PengalamanModel())->findAll();
        $keahlian   = (new KeahlianModel())->findAll();
        $portofolio = (new PortofolioModel())->findAll();
        $sosial     = (new SosialModel())->findAll();
        $biodata    = (new BiodataModel())->first();

        return view('about', [
            'title'      => 'Tentang Saya',
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'keahlian'   => $keahlian,
            'portofolio' => $portofolio,
            'sosial_media' => $sosial,
            'biodata'    => $biodata
        ]);
    }
}
