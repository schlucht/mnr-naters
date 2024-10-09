<?php

namespace OTS\App\User\Controllers;

use OTS\App\Core\Container;
use OTS\App\Core\Controller;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class UserController extends Controller
{
    function __construct(Container $container)
    {
        parent::__construct($container);
        $this->folder = 'User';     
    }

    public function index()
    {
        $this->render('UserView');
    }
}