<?php

use OTS\App\Core\AppContainer;
use OTS\App\Core\Container;
use OTS\App\Home\HomeContainer;
use OTS\App\Home\HomeRoutes;

defined('ROOTPATH') OR exit('No direct script access allowed');
require __DIR__ . '/autoloader.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/config.php';


$container = new Container();
$container = AppContainer::Init($container);
$container = HomeContainer::Init($container);

$router = $container->build('router');
$router = HomeRoutes::routes($router);

$router->dispach();

