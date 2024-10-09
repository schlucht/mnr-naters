<?php
namespace OTS\App\Core;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class AppContainer
{
    public static function Init(Container $container)
    {
        $container->add('container', function()
        {
            return new Container();
        });
        $container->add('router', function()use($container)
        {
            return new Router($container);
        });
        return $container;
    }
}