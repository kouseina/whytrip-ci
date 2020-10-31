<?php

namespace App\Controllers;

use App\Models\DaerahModel;
use App\Models\WisataModel;
use Myth\Auth\Models\UserModel;

class Daerah extends BaseController
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
        // $daerah = $this->daerahModel->findAll();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $daerah = $this->daerahModel->search($keyword);
        } else {
            $daerah = $this->daerahModel;
        }

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $daerah->paginate(9, 'daerah'),
            'pager' => $this->daerahModel->pager,
        ];

        return view('daerah/index', $data);
    }

    public function wisata($idDaerah)
    {
        // $wisata = $this->wisataModel->where(['kode_provinsi' => $id])->findAll();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->wisataModel->search($keyword);
        } else {
            $wisata = $this->wisataModel;
        }

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $this->daerahModel->where(['id' => $idDaerah])->findAll(),
            'wisata' => $wisata->where(['kode_provinsi' => $idDaerah])->paginate(9, 'wisata'),
            'pager' => $this->wisataModel->pager,
        ];

        return view('wisata/index', $data);
    }

    public function popular()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wisata = $this->wisataModel->search($keyword);
        } else {
            $wisata = $this->wisataModel;
        }

        $data = [
            'title' => 'Popular',
            'navActive' => 'popular',
            'daerah' => $this->daerahModel->findAll(),
            'wisata' => $wisata->paginate(9, 'wisata'),
            'pager' => $this->wisataModel->pager,
        ];

        return view('popular/index', $data);
    }
}
