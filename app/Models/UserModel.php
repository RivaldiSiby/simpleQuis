<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\Null_;

class UserModel extends Model
{
    protected $table                = 'user';
    protected $primaryKey           = 'id_user';
    protected $allowedFields        = ['email', 'password', 'profesi'];

    public function getUser($email = Null)
    {
        if ($email != null) {
            return $this->table($this->table)->where('email', $email)->find();
        } else {
            return $this->table($this->table)->findAll();
        }
    }
}
