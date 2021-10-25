<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        session();
    }
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('home.php', $data);
    }
    public function daftar()
    {

        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('daftar.php', $data);
    }
}
