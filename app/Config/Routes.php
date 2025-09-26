<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/main', 'Main::index');
$routes->post('/main/store', 'Main::store');




