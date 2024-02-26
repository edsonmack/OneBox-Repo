<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/create_account', 'CreateAccount::create_account');
$routes->get('/dashboard', 'Dashboard::dashboard');
$routes->get('/myquery', 'MyQuery::index');

// route to signup user
$routes->post('/signup', 'UserController::create_user');

