<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    protected $tableUser;
    public function __construct()
    {
        $this->tableUser = new ModelUser();
    }
    public function index()
    {

        // $faker = \Faker\Factory::create('id_ID');

        // $arr = [];
        // for ($i = 1; $i <= 10; $i++) {
        //     $arr[] = [
        //         'nama' => $faker->name(),
        //         'email' => $faker->email(),
        //         'password' => 'member' . $i,
        //         'role_id' => 2,
        //         'is_active' => $faker->randomElement([1, 0]),
        //         'tanggal_input' => date('Y-m-d')
        //     ];
        // }

        // $this->tableUser->insertBatch($arr);

        $dataJoin = $this->tableUser->builder('user')->join('role r', 'r.id=user.role_id')->get()->getResultArray();

        $data = [
            'title' => 'User',
            'user' => $dataJoin
        ];




        return view('user/vw_user', $data);
    }

    public function detailUser($user_id)
    {
        $user = $this->tableUser->builder('user')->join('role r', 'r.id=user.role_id')->where('user_id', $user_id)->get()->getResultArray();

        $data = [
            'title' => 'Detail User',
            'user' => $user
        ];

        return view('user/detailUser', $data);
    }
}
