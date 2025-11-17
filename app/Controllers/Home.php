<?php

namespace App\Controllers;
use App\Models\BiodataModel;
use App\Models\SosialModel;

class Home extends BaseController
{
    public function index()
    {
        $bio = new BiodataModel();
        $sos = new SosialModel();

        $data = [
            'biodata' => $bio->first(),
            'sosial_media' => $sos->findAll()
        ];

        return view('home', $data);
    }
}
