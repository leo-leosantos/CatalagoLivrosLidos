<?php


use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    $builder->connect('/', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'login']);
    $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $builder->fallbacks();
});

$routes->prefix('admin', function (RouteBuilder $builder) {
    $builder->fallbacks();
});
