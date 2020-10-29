<?php

namespace App\Controllers;

use App\Models\DaerahModel;
use App\Models\WisataModel;

class Daerah extends BaseController
{
    protected $daerahModel;
    protected $wisataModel;

    public function __construct()
    {
        $this->daerahModel = new DaerahModel();
        $this->wisataModel = new WisataModel();
    }

    public function index()
    {
        // $daerah = $this->daerahModel->findAll();
        $daerah = $this->daerahModel->paginate(1);
        $pager = $this->daerahModel->pager;

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $daerah,
            'pager' => $pager,
        ];

        return view('daerah/index', $data);
    }

    public function wisata($id)
    {
        // $wisata = $wisataModel->findAll();
        $wisata = $this->wisataModel->where(['kode_provinsi' => $id])->findAll();
        $daerah = $this->daerahModel->where(['id' => $id])->findAll();

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $daerah,
            'wisata' => $wisata,
        ];

        return view('wisata/index', $data);
    }
}
