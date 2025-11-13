<?php

namespace App\Controllers;
use App\Models\PengalamanModel;

class Pengalaman extends BaseController
{
    public function index()
    {
        $model = new PengalamanModel();
        $data['pengalaman'] = $model->findAll();
        return view('pengalaman', $data);
    }
}
