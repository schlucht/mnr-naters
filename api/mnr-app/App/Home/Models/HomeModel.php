<?php

namespace OTS\App\Home\Models;
use OTS\App\Core\Model;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class HomeModel extends Model
{  
    public function __construct()
    {
        $this->title = "Startseite";
    }
}