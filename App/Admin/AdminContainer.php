<?php
namespace OTS\App\Admin;

use OTS\App\Core\Container;
use OTS\App\Admin\Controllers\AdminController;
use OTS\App\Admin\Models\AdminModel;
use OTS\App\Admin\AdminRoutes;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class AdminContainer
{
    public static function Init(Container $container)
    {
        $container->add('admincontroller', function()use($container)
        {
            return new AdminController($container);
        });
        $container->add('adminroutes', function()use($container)
        {
            return new AdminRoutes($container);
        });
        $container->add('adminmodel', function()use($container)
        {
            return new AdminModel($container);
        });
        
        return $container;
    }
}