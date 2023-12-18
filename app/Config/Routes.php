<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/kategori/deleteKategori/(:num)', 'Kategori::deleteKategori/$1');
