<?php

namespace App\Controllers;
use App\Models\KeahlianModel;

class Keahlian extends BaseController
{
    public function index()
    {
        $model = new KeahlianModel();
        $data['keahlian'] = $model->findAll();
        return view('keahlian', $data);
    }
}
