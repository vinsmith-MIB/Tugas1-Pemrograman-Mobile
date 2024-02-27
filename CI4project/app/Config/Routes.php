<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PostsController::index', ['as' => 'app.index']);
$routes->post('/', 'PostsController::store', ['as' => 'app.store']);
