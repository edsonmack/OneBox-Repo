<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/edson', 'Home::index');

/**
 * Register account....
 */
$routes->get('/create_account', 'UserController::register_account');

// General template
$routes->get('/generic', 'GenericController::general_template');


