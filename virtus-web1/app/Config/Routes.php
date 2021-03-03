<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Login::index');
$routes->get('/Dashboard', 'Dashboard::index', ['FilterS' => 'auth']);
//$routes->get('/Dashboard/d_1', 'Dashboard::index');
$routes->get('/Dashboard2', 'Dashboard2::index');

$routes->get('/Security', 'Security::index');
$routes->get('/Security2', 'Security2::index');

$routes->get('/Shift', 'Shift::index');

$routes->get('/Location', 'Location::index');


$routes->get('/Jabatan', 'Jabatan::index');
$routes->get('/Role_user', 'Role_user::index');
$routes->get('/Tambah_role_user', 'Tambah_role_user::index');
$routes->get('/Area', 'Area::index');
$routes->get('/Customer', 'Customer::index');
$routes->get('/User', 'User::index');
$routes->get('/Smartwatch', 'Smartwatch::index');






/**
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
