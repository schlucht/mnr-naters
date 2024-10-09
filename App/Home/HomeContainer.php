<?php
namespace OTS\App\Home;

use OTS\App\Core\Container;
use OTS\App\Home\Controllers\HomeController;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class HomeContainer
{
    public static function Init(Container $container)
    {
        $container->add('homecontroller', function()use($container)
        {
            return new HomeController($container);
        });
        $container->add('homeroutes', function()use($container)
        {
            return new HomeRoutes($container);
        });
        return $container;
    }
}