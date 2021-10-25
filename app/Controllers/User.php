<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'active' => 'beranda'
        ];
        return view('user/index', $data);
    }
    public function Bquis()
    {
        $data = [
            'active' => 'bquis'
        ];
        return view('user/Bquis', $data);
    }
    public function Iquis()
    {
        $data = [
            'active' => 'iquis'
        ];
        return view('user/Iquis', $data);
    }
    public function Nquis()
    {
        $data = [
            'active' => 'nquis'
        ];
        return view('user/Nquis', $data);
    }
    public function profile()
    {
        $data = [
            'active' => 'profile'
        ];
        return view('user/profile', $data);
    }
    public function keluar()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
