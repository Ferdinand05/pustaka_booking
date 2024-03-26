<?php

namespace App\Controllers;

use App\Models\ModelBuku;
use App\Models\ModelUser;

class Home extends BaseController
{
    protected $tableUser;
    protected $tableBuku;
    protected $tablePinjam;
    public function __construct()
    {
        $this->tableUser = new ModelUser();
        $this->tableBuku = new ModelBuku();
    }
    public function index(): string
    {

        $dataBuku = $this->tableBuku->findAll();

        $data = [
            'title' => 'Home',
            'buku' => $dataBuku
        ];

        return view('home/index', $data);
    }

    public function detailBuku()
    {

        $id_buku = $this->request->getPost('id_buku');

        if ($this->request->isAJAX()) {
            $buku = $this->tableBuku->builder('buku b')
                ->join('kategori k', 'k.id_kategori=b.id_kategori')->where('id', $id_buku)->get()->getResultArray();

            $data = [
                'title' => 'Detail Buku',
                'buku' => $buku
            ];

            $json = [
                'data' => view('home/detailbuku', $data)
            ];

            return $this->response->setJSON($json);
        }
    }


    public function detailUser($user_id)
    {
        $user = $this->tableUser->builder('user')->join('role r', 'r.id=user.role_id')->where('user_id', $user_id)->get()->getResultArray();

        $data = [
            'title' => 'Detail User',
            'user' => $user
        ];

        return view('home/detailuser', $data);
    }
}
