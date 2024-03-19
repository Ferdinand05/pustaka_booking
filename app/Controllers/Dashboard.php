<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;
use App\Models\ModelKategori;
use App\Models\ModelUser;

class Dashboard extends BaseController
{
    public function index()
    {

        $tableBuku = new ModelBuku();
        $tableKategori = new ModelKategori();
        $tableUser =  new ModelUser();

        if (!session()->has('logged_in')) {

            return redirect()->to(base_url('/'));
        }


        $data = [
            'title' => 'Dashboard',
            'buku' => $tableBuku->countAll(),
            'kategori' => $tableKategori->countAll(),
            'user' => $tableUser->countAll()
        ];

        return view('dashboard/vw_dashboard', $data);
    }
}
