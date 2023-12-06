<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;

class Buku extends BaseController
{
    protected $tableBuku;
    public function __construct()
    {
        $this->tableBuku = new ModelBuku();
    }
    public function index()
    {

        $buku = $this->tableBuku->builder('buku b')
            ->join('kategori k', 'k.id_kategori=b.id_kategori')->get()->getResultArray();

        $data = [
            'title' => 'Buku',
            'buku' => $buku
        ];


        return view('buku/vw_buku', $data);
    }

    public function detailBuku($id_buku)
    {
        $buku = $this->tableBuku->builder('buku b')
            ->join('kategori k', 'k.id_kategori=b.id_kategori')->where('id', $id_buku)->get()->getResultArray();

        $data = [
            'title' => 'Detail Buku',
            'buku' => $buku
        ];
        return view('buku/detailBuku', $data);
    }
}
