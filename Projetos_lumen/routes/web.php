<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('auth',['as' => 'login', 'uses' => 'authUser@autenticationUser']);
$router->get('/', function () use ($router) {
    return $router->app->version();
});
