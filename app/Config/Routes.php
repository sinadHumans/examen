<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Productos/listar::index');
$routes->get('crear', 'Productos/crear::crear');
$routes->post('guardar', 'Productos/guardar::guardar');
$routes->get('eliminar/(:num)', 'Productos/eliminar::eliminar/$1');
$routes->get('editar/(:num)', 'Productos/editar::editar/$1');
$routes->post('actualizar', 'Productos/actualizar::actualizar');
