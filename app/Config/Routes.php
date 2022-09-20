<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin\Dashboard::index');

$routes->get('/admin/blog', 'Admin\Blog::index', ['filter' => 'UserFilter']);
$routes->get('/admin/blog/edit/(:num)', 'Admin\Blog::edit/$1', ['filter' => 'UserFilter']);
$routes->post('/admin/blog/update/(:num)', 'Admin\Blog::update/$1', ['filter' => 'UserFilter']);

$routes->delete('/admin/blog/(:num)', 'Admin\Blog::hapus/$1', ['filter' => 'UserFilter']);
// untuk form tambah
$routes->get('/admin/blog/tambah', 'Admin\Blog::tambah', ['filter' => 'UserFilter']);
$routes->get('/admin/blog/(:any)', 'Admin\Blog::detail/$1', ['filter' => 'UserFilter']);
// untuk proses simpan
$routes->post('/admin/blog/simpan', 'Admin\Blog::simpan', ['filter' => 'UserFilter']);

$routes->post('/admin/blog/uploadGambar', 'Admin\Blog::uploadGambar', ['filter' => 'UserFilter']);

$routes->get('/admin/blog/deleteGambar', 'Admin\Blog::deleteGambar', ['filter' => 'UserFilter']);
$routes->post('/admin/blog/deleteGambar', 'Admin\Blog::deleteGambar', ['filter' => 'UserFilter']);

$routes->get('/admin/dashboard', 'Admin\Dashboard::index', ['filter' => 'UserFilter']);

$routes->get('/admin/berita', 'Admin\Berita::index', ['filter' => 'UserFilter']);

$routes->get('/admin/coba', 'Admin\Coba::test',['filter' => 'UserFilter'] );

//  Login
$routes->get('/login', 'Auth\Login::index');
$routes->post('/cek-login', 'Auth\Login::cek_login');
$routes->get('/logout', 'Auth\Login::logout');



$routes->get('/logout', 'Auth\Login::logout');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
