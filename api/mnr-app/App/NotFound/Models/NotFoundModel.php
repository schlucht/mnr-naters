<?php

namespace OTS\App\NotFound\Models;
use OTS\App\Core\Model;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class NotFoundModel extends Model
{  
    public function __construct()
    {
        $this->title = "404 - Not Found";
    }
}

