<?php

namespace OTS\App\Admin\Controllers;

use OTS\App\Core\Container;
use OTS\App\Core\Controller;


defined('ROOTPATH') OR exit('No direct script access allowed');

Class AdminController extends Controller
{
    function __construct(Container $container)
    {
        parent::__construct($container);
        $this->folder = 'Admin';     
    }

    public function index()
    {
        $this->render('AdminView');
    }
}