<?php

namespace App\Controllers;
use App\Models\PortofolioModel;

class Portofolio extends BaseController
{
    public function index()
    {
        $model = new PortofolioModel();
        $data['portofolio'] = $model->findAll();
        return view('portofolio', $data);
    }
}
