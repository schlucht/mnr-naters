<?php

namespace OTS\App\User;

use OTS\App\Core\Router;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class UserRoutes
{
    public static function routes(Router $router)
    {
        $router->add('GET', '/mnr/user', 'UserController', 'index');

        return $router;
    }
}