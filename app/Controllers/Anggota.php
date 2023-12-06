<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Expr\FuncCall;

class Anggota extends BaseController
{

    protected $tableAnggota;
    public function __construct()
    {
        $this->tableAnggota = new ModelAnggota();
    }

    public function index()
    {
    }
}
