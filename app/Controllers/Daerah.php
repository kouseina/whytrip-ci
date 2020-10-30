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
        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $daerah = $this->daerahModel->search($keyword);
        } else {
            $daerah = $this->daerahModel;
        }

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $daerah->paginate(6, 'daerah'),
            'pager' => $this->daerahModel->pager,
        ];

        return view('daerah/index', $data);
    }

    public function wisata($id)
    {
        // $wisata = $this->wisataModel->where(['kode_provinsi' => $id])->findAll();

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $this->daerahModel->where(['id' => $id])->findAll(),
            'wisata' => $this->wisataModel->where(['kode_provinsi' => $id])->paginate(6, 'wisata'),
            'pager' => $this->wisataModel->pager,
        ];

        return view('wisata/index', $data);
    }
}
