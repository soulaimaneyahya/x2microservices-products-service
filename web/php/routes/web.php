<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/**
 * Products
 */
$router->get('/products', [
    'as' => 'products.index',
    'uses' => 'GetProductsListController'
]);

$router->get('/', function () use ($router) {
    return $router->app->version();
});
