<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;

class Kategori extends BaseController
{
    protected $tableKategori;
    public function __construct()
    {
        $this->tableKategori = new ModelKategori();
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'kategori' => $this->tableKategori->findAll()
        ];


        return view('kategori/vw_kategori', $data);
    }

    public function deleteKategori($id_kategori)
    {
        $this->tableKategori->delete($id_kategori);

        return redirect()->back();
    }
}
