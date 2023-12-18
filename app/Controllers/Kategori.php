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

    public function editKategori($id_kategori)
    {
        $kategori = $this->tableKategori->find($id_kategori);

        $data = [
            'kategori' => $kategori,
            'title' => 'Edit Kategori'
        ];
        return view('kategori/editKategori', $data);
    }

    public function saveKategori()
    {
        $id_kategori = $this->request->getPost('id_kategori');
        $nama_kategori = $this->request->getPost('nama_kategori');

        $this->tableKategori->update($id_kategori, [
            'nama_kategori' => $nama_kategori
        ]);

        session()->setFlashdata('success', 'Data Berhasil Diupdate!');
        return redirect()->to(base_url('kategori'));
    }

    public function formAddKategori()
    {

        $data = [
            'title' => 'Form Kategori'
        ];
        return view('kategori/formAdd', $data);
    }

    public function addKategori()
    {
        $nama_kategori = $this->request->getPost('nama_kategori');

        $this->tableKategori->insert([
            'nama_kategori' => $nama_kategori
        ]);

        session()->setFlashdata('success', 'Data Berhasil DITAMBAHKAN!');
        return redirect()->to(base_url('kategori'));
    }
}
