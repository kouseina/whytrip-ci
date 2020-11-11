<?php

namespace App\Controllers;

use App\Models\DaerahModel;
use App\Models\KomentarModel;
use App\Models\WisataModel;
use Myth\Auth\Models\LoginModel;
use Myth\Auth\Models\UserModel;

class Komentar extends BaseController
{
    protected $daerahModel;
    protected $wisataModel;
    protected $userModel;
    protected $komentarModel;
    protected $loginModel;

    public function __construct()
    {
        $this->daerahModel = new DaerahModel();
        $this->wisataModel = new WisataModel();
        $this->userModel = new UserModel();
        $this->komentarModel = new KomentarModel();
        $this->loginModel = new LoginModel();
    }

    public function index($id)
    {
        $login = $this->loginModel->findAll();
        $lastLogin = end($login);
        $userLastLogin = $this->userModel->where(['id' => $lastLogin->user_id])->findAll();
        // $komentar = $this->komentarModel->findAll();
        // $user = $this->userModel->findAll();

        // validasi input
        if (!$this->validate([
            'komentar'=> 'required',
            'rating' => 'required',
            // 'gambar' => 'uploaded[upload-gambar]'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('../detailWisata/' . $id)->withInput()->with('validation', $validation);
            return redirect()->to('../detailWisata/' . $id)->withInput();
        }

        $this->komentarModel->save([
            'id_wisata' => $id,
            'id_user' => $userLastLogin[0]->id,
            'komentar' => $this->request->getVar('komentar'),
            'rating' => $this->request->getVar('rating'),
            'gambar' => $this->request->getFile('upload-gambar')
        ]);

        // $data = [
        //     'title' => 'Location',
        //     'navActive' => 'location',
        //     'daerah' => $this->daerahModel->findAll(),
        //     'wisata' => $this->wisataModel->where(['id' => $id])->findAll(),
        //     'login' => $login,
        //     'komentar' => $komentar,
        //     'user' => $user,
        //     'userLastLogin' => $this->userModel->where(['id' => $lastLogin->user_id])->findAll(),
        // ];

        session()->setFlashdata('pesan', 'Komentar berhasil dibuat');

        return redirect()->to('../detailWisata/' . $id);
    }
}
