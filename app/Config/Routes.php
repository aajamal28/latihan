<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/scan/(:segment)', 'Home::index/$1');
$routes->get('/login','AuthController::index');
$routes->post('/auth', 'AuthController::login');

//custom routes
$routes->group('admin', function ($routes) {
    // $routes->group('item', function ($routes) {
    //     $routes->add('list', 'Master\Item::index');
    //     $routes->add('add', 'Item::add');
    //     $routes->add('/(alphanum)', 'Item::detail/$1');
    //     $routes->post('save', 'Item::save');
    // });
    $routes->get('/', 'Admin\DashboardController::index');
});

//get
$routes->get('/data-scan/(:any)/(:any)', 'ScanController::getDataScan/$1/$2');
$routes->get('/getrequest/(:any)', 'RequestController::getDetailRequest/$1');

//post
$routes->post('/scan-proses','ScanController::scanprocess');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
