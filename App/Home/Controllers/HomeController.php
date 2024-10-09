<?php

namespace OTS\App\Home\Controllers;

use OTS\App\Core\Container;
use OTS\App\Core\Controller;
//use OTS\App\Core\Container;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class HomeController extends Controller
{
    function __construct(Container $container)
    {
        parent::__construct($container);
        $this->folder = 'Home';     
    }

    public function index()
    {
        $this->render('Home');
    }
}