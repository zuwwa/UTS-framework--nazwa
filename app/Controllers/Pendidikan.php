<?php

namespace App\Controllers;
use App\Models\PendidikanModel;
use App\Models\BiodataModel;
use App\Models\SosialModel;

class Pendidikan extends BaseController
{
    public function index()
    {
        $pendidikanModel = new PendidikanModel();
        $biodataModel = new BiodataModel();
        $sosialMediaModel = new SosialModel();

        $data['pendidikan'] = $pendidikanModel->findAll();
        $data['biodata'] = $biodataModel->first();
        $data['sosial_media'] = $sosialMediaModel->findAll();

        return view('pendidikan', $data);
    }
}
