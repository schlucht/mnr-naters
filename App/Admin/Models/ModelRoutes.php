<?php

namespace OTS\App\Admin\Models;

use OTS\App\Core\Model;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class AdminModel extends Model
{  
    public function __construct()
    {
        $this->title = "Admin Dashbord";
    }
}