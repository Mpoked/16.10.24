<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('karty', 'Home::karty');
$routes->get("tabulka", "Main::tabulka");
$routes->get("carousel", "Main::carousel");
$routes->get("hraci", "Main::hraci");
$routes->get("polaci", "Main::polaci");
$routes->get("polaci2", "main::polaci2");