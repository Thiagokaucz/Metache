<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $builder): void {
    $builder->setRouteClass(DashedRoute::class);
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $builder->connect('/users', ['controller' => 'Users', 'action' => 'index']);
    $builder->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
    $builder->connect('/users/view/*', ['controller' => 'Users', 'action' => 'view']);
    $builder->connect('/users/edit/*', ['controller' => 'Users', 'action' => 'edit']);
    $builder->connect('/users/delete/*', ['controller' => 'Users', 'action' => 'delete']);

    $builder->fallbacks();
};
