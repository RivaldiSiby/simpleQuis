<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class User implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('useraktif')) {
            return redirect()->to('/');
        } else {
            if (!session()->get('email')) {
                return redirect()->to('/');
            }
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('useraktif') and session()->get('email')) {
            return redirect()->to('/user');
        }
    }
}
