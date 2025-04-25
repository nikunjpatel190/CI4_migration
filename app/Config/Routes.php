<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/event/list', 'EventController::list');   // Show the Event listing

$routes->get('event/create', 'EventController::form');   // Show the form
$routes->post('event/create', 'EventController::create');  // Handle form submission