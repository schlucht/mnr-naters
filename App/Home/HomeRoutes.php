<?php

namespace OTS\App\Home;

use OTS\App\Core\Router;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class HomeRoutes
{
    public static function routes(Router $router)
    {
        $router->add('GET', '/mnr/', 'HomeController', 'index');

        return $router;
    }
}

