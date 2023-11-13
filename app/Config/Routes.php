<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/daftar', 'Daftar::index');
$routes->get('/seleksi', 'Seleksi::index');
$routes->get('/info', 'Info::index');
$routes->get('/kontak', 'Kontak::index');
$routes->get('/sekolah', 'Admin\Dashboard::index');
