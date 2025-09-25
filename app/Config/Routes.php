<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/users', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/produk/create', 'Produk::create');
$routes->post('/produk/store', 'Produk::store');
$routes->get('/main/create', 'Main::create');
$routes->post('/main/store', 'Main::store');




