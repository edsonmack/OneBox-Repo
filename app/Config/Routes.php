<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/create_account', 'CreateAccount::create_account');
$routes->get('/dashboard', 'Dashboard::dashboard');