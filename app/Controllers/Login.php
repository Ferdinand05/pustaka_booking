<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Login extends BaseController
{
    protected $tableUser;
    public function __construct()
    {
        $this->tableUser = new ModelUser();
    }
    public function index()
    {

        $data = [
            'title' => 'Login'
        ];

        if (session('logged_in') == true) {
            return redirect()->to(site_url('dashboard'))->withInput();
        }

        return view('login/vw_login', $data);
    }

    public function LoggedIn()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getVar('password');

        $checkData = $this->tableUser->builder('user')->where('email', $email)->where('password', $password)
            ->get()->getNumRows();

        if ($checkData < 1) {
            session()->setFlashdata('error', 'EMAIL / PASSWORD SALAH!');
            return redirect()->back()->withInput();
        } else {

            $dataUser = $this->tableUser->builder('user')->where('email', $email)->where('password', $password)
                ->get()->getRowArray();
            session()->set('logged_in', true);
            session()->set('user', $dataUser['nama']);
            session()->set('user_id', $dataUser['user_id']);
            session()->set('role', $dataUser['role_id']);


            if (session('role') == 2) {
                return redirect()->to(site_url('home'))->withInput();
            }

            return redirect()->to(site_url('dashboard'))->withInput();
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(base_url('/'));
    }
}
