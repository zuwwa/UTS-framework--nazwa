<?php

namespace App\Controllers;
use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\PortofolioModel;
use App\Models\MinatModel;
use App\Models\KeahlianModel;
use App\Models\SosialModel;

class Home extends BaseController
{
    public function index()
    {
        $biodataModel = new BiodataModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $portofolioModel = new PortofolioModel();
        $minatModel = new MinatModel();
        $keahlianModel = new KeahlianModel();
        $sosialModel = new SosialModel();

        // Ambil data pengalaman kerja & kepanitiaan dari satu tabel
        $pengalaman = $pengalamanModel->where('jenis', 'Kerja')->findAll();
        $kepanitiaan = $pengalamanModel->where('jenis', 'Kepanitiaan')->findAll();

        $data = [
            'biodata'      => $biodataModel->first(),
            'pendidikan'   => $pendidikanModel->findAll(),
            'pengalaman'   => $pengalaman,
            'kepanitiaan'  => $kepanitiaan,
            'portofolio'   => $portofolioModel->findAll(),
            'minat'        => $minatModel->findAll(),
            'keahlian'     => $keahlianModel->findAll(),
            'sosial_media' => $sosialModel->findAll(),
        ];

        return view('home', $data);
    }
}
