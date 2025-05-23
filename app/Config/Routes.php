<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/histoireclub', 'histoireclub::index');
$routes->get('/Equipe1', 'Equipe1::index');
$routes->get('/Equipe2', 'Equipe2::index');
$routes->get('/Contact', 'Contact::index');
$routes->get('/Boutiques', 'Boutiques::index');
