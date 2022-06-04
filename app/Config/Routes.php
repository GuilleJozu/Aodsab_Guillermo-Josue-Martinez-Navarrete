<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Router Setup
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Route Definitions
$routes->get('/', 'Home::index');

// Ruta para generar un pdf
$routes->get('/news/otroPDF', 'NewsController::otroPDF');


$routes->get('/news/', 'NewsController::index');
$routes->get('/news/cards', 'NewsController::cards');
$routes->match(['get', 'post'], 'news/create', 'NewsController::create');
$routes->add('news/edit/(:segment)', 'NewsController::edit/$1');

// Rutas para módulo de periodistas
$routes->get('/periodista/', 'PeriodistaController::index');
$routes->match(['get', 'post'], 'periodista/create', 'PeriodistaController::create');

// Rutas para el módulo de categorías
$routes->get('/categoria/', 'CategoriaController::index');
$routes->match(['get', 'post'], 'categoria/create', 'CategoriaController::create');
$routes->add('categoria/edit/(:segment)', 'CategoriaController::update/$1');

// Rutas para el módulo de categorías
$routes->get('/staff/', 'StaffController::index');
$routes->match(['get', 'post'], 'staff/create', 'StaffController::create');
$routes->add('staff/edit/(:segment)', 'CategoriaController::update/$1');

// Additional Routing
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
