<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group("dashboard", function (RouteCollection $routes) {
    $routes->presenter('pelicula', ['controller' => 'Dashboard\PeliculaController']);
    $routes->presenter('categoria', ['controller' => 'Dashboard\CategoriaController']);
});
