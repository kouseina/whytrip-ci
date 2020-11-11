<?php

namespace App\Controllers;

use App\Models\DaerahModel;
use App\Models\KomentarModel;
use App\Models\WisataModel;
use Myth\Auth\Models\LoginModel;
use Myth\Auth\Models\UserModel;

class DetailWisata extends BaseController
{
    protected $daerahModel;
    protected $wisataModel;
    protected $userModel;
    protected $loginModel;
    protected $komentarModel;

    public function __construct()
    {
        $this->daerahModel = new DaerahModel();
        $this->wisataModel = new WisataModel();
        $this->userModel = new UserModel();
        $this->loginModel = new LoginModel();
        $this->komentarModel = new KomentarModel();
    }

    public function index($id)
    {
        // session();
        // $wisata = $this->wisataModel->where(['kode_provinsi' => $id])->findAll();

        $login = $this->loginModel->findAll();
        $lastLogin = end($login);
        $komentar = $this->komentarModel->findAll();
        $user = $this->userModel->findAll();

        $data = [
            'title' => 'Location',
            'navActive' => 'location',
            'daerah' => $this->daerahModel->findAll(),
            'wisata' => $this->wisataModel->where(['id' => $id])->findAll(),
            'login' => $login,
            'komentar' => $komentar,
            'user' => $user,
            'validation' =>\Config\Services::validation()
        ];

        return view('detailWisata/index', $data);
    }
}
