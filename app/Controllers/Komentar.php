<?php

namespace App\Controllers;

use App\Models\DaerahModel;
use App\Models\UserModel;
use App\Models\WisataModel;

class Komentar extends BaseController
{
    protected $daerahModel;
    protected $wisataModel;
    protected $userModel;

    public function __construct()
    {
        $this->daerahModel = new DaerahModel();
        $this->wisataModel = new WisataModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $this->daerahModel->findAll(),
            'wisata' => $this->wisataModel->findAll(),
            'user' => $this->userModel->findAll(),
        ];

        return view('detailWisata/komentar', $data);
    }
}
