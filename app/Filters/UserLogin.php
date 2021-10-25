<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserLogin implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('useraktif') and session()->get('email')) {
            return redirect()->to('/user');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
