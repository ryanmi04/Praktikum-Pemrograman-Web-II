<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BooksController::index');
$routes->group('admin', function ($routes) {
    $routes->get('BooksController', 'BooksAdminController::index', ['filter' => 'authenticate']);
    $routes->add('BooksController/new', 'BooksAdminController::create');
    $routes->add('BooksController/(:segment)/edit', 'BooksAdminController::edit/$1');
    $routes->get('BooksController/(:segment)/delete', 'BooksAdminController::delete/$1');
});

$routes->group('register', function ($routes) {
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});


$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});