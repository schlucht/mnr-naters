<?php

use OTS\App\Core\AppContainer;
use OTS\App\Core\Container;
use OTS\App\Home\HomeContainer;
use OTS\App\Home\HomeRoutes;
use OTS\App\NotFound\NotFoundContainer;
use OTS\App\User\UserContainer;
use OTS\App\User\UserRoutes;
use OTS\App\Admin\AdminRoutes;
use OTS\App\Admin\AdminContainer;

defined('ROOTPATH') OR exit('No direct script access allowed');
require __DIR__ . '/autoloader.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/config.php';

$container = new Container();
$container = AppContainer::Init($container);
$container = HomeContainer::Init($container);
$container = NotFoundContainer::Init($container);
$container = UserContainer::Init($container);
$container = AdminContainer::Init($container);

$router = $container->build('router');
$router = HomeRoutes::routes($router);
$router = UserRoutes::routes($router);
$router = AdminRoutes::routes($router);

$router->dispach();
