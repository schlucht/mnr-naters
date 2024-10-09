<?php

namespace OTS\App\Admin;

use OTS\App\Core\Router;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class AdminRoutes
{
    public static function routes(Router $router)
    {
        $router->add('GET', '/admin', 'AdminController', 'index');

        return $router;
    }
}