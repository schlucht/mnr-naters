<?php

namespace OTS\App\User\Models;
use OTS\App\Core\Model;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class UserModel extends Model
{  
    public function __construct()
    {
        $this->title = "User";
    }
}