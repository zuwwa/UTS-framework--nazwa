<?php

namespace App\Controllers;
use App\Models\PengalamanModel;
use App\Models\BiodataModel;
use App\Models\SosialModel;

class Pengalaman extends BaseController
{
    public function index()
    {
        $pengalamanModel = new PengalamanModel();
        $biodataModel = new BiodataModel();
        $sosialMediaModel = new SosialModel();

        $data['pengalaman'] = $pengalamanModel->findAll();
        $data['biodata'] = $biodataModel->first(); // ambil biodata utama
        $data['sosial_media'] = $sosialMediaModel->findAll(); // semua sosial media

        return view('pengalaman', $data);
    }
}
