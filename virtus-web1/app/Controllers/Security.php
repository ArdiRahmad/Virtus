<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class Security extends BaseController
{
    protected $LokasiModel;
    public function __construct()
    {
        $this->LokasiModel = new LokasiModel();
    }

    public function index()
    {
        $Lokasi = $this->LokasiModel->findAll();

        $data = [
            'Lokasi' => $Lokasi,
        ];

        //dd($data);
        return view('Security/Security', $data);
    }
}
