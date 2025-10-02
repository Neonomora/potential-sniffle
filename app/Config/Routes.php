<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/form-unwrap', 'Form_Unwrap::index');
$routes->get('/form-wrap', 'Form_Wrap::index');
$routes->get('/main', 'Main::index');
$routes->post('/main/store', 'Main::store');




