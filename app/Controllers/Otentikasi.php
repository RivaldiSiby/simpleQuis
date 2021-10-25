<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Otentikasi extends BaseController
{
    protected $user;
    public function __construct()
    {
        session();
        $this->user = new UserModel();
    }
    public function register()
    {
        // Validasi Rules
        $rules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Tidak Boleh Kosong',
                    'valid_email' => 'Email yang dimasukan tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'password Tidak Boleh Kosong',
                    'min_length' => 'password harus lebih dari 8 kombinasi huruf dan angka'
                ]
            ],
            'profesi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Anda Belum memilih Profesi'
                ]
            ]
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('/daftar')->withInput();
        }
        $this->user->save([
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'profesi' => $this->request->getVar('profesi'),
        ]);
        $msg = 'Registrasi Telah Berhasil,Anda sudah bisa login Sekarang  ';
        session()->setFlashdata('pesan', $msg);
        return redirect()->to('/');
    }
    public function masuk()
    {
        // validasi
        $rules = [
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email Tidak Boleh Kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'password Tidak Boleh Kosong',
                ]
            ]
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('/')->withInput();
        }
        $user = $this->user->getUser($this->request->getVar('email'));
        $user = $user[0];
        if ($user) {
            if (password_verify($this->request->getVar('password'), $user['password'])) {
                $datuser = [
                    'useraktif' => true,
                    'email' => $user['email'],
                    'id_user' => $user['id_user']
                ];
                session()->set($datuser);
                return redirect()->to('/user');
            } else {
                $msg = 'Password yang anda masukan Tidak cocok';
                session()->setFlashdata('pass', 'Password Tidak cocok');
            }
        } else {
            $msg = 'Username  yang anda masukan tidak terdaftar';
            session()->setFlashdata('email', 'Username tidak terdaftar');
        }
        session()->setFlashdata('error', $msg);
        return redirect()->to('/')->withInput();
    }
}
