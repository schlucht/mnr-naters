<?php
namespace OTS\App\NotFound;

use OTS\App\Core\Container;
use OTS\App\NotFound\Controllers\NotFoundController;
use OTS\App\NotFound\Models\NotFoundModel;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class NotFoundContainer
{
    public static function Init(Container $container)
    {
        $container->add('notfoundcontroller', function()use($container)
        {
            return new NotFoundController($container);
        });   
        $container->add('notfoundmodel', function()
        {
            return new NotFoundModel();
        });
            
        return $container;
    }
    
}
