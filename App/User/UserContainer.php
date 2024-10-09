<?php
namespace OTS\App\User;

use OTS\App\Core\Container;
use OTS\App\User\Controllers\UserController;
use OTS\App\User\Models\UserModel;
use OTS\App\User\UserRoutes;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class UserContainer
{
    public static function Init(Container $container)
    {
        $container->add('usercontroller', function()use($container)
        {
            return new UserController($container);
        });
        $container->add('userroutes', function()use($container)
        {
            return new UserRoutes($container);
        });
        $container->add('usermodel', function()use($container)
        {
            return new UserModel($container);
        });
        
        return $container;
    }
}