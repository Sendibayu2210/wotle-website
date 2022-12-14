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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/finishpayment', 'Home::payment_success');
$routes->get('/unfinishpayment', 'Home::payment_failed');
$routes->get('/errorpayment', 'Home::payment_error');


// AUTH
$routes->get('/login', 'Auth::login');
$routes->post('/valid-login', 'Auth::validasi_login');
$routes->get('/logout', 'Auth::logout');

$routes->get('/register', 'Auth::register');
$routes->post('/cek-register', 'Auth::cek_register');
$routes->post('/register-valid', 'Auth::save_register');

// Admin 
$routes->get('/dashboard', 'Admin::index');
$routes->get('/users', 'Admin::users');

$routes->get('/riwayat-perjalanan','Admin::riwayat_perjalanan');

// ajax get users
$routes->post('/getUsers/(:any)', 'Admin::getUsers/$1');
$routes->post('/user/(:any)', 'Admin::detail_user/$1');
$routes->post('/search-users', 'Admin::cari_users');


// driver
$routes->post('/change-status', 'Admin::update_status_user');

$routes->get('/admin-promo', 'Admin::promo');
$routes->get('/tambah-promo', 'Admin::tambah_promo');
$routes->post('/save-promo', 'Admin::save_promo');
$routes->delete('/hapus-promo', 'Admin::hapus_promo');
$routes->get('/edit-promo/(:num)', 'Admin::edit_promo/$1');
$routes->post('/update-promo/(:num)', 'Admin::update_promo/$1');
$routes->post('/detail-promo','Admin::detail_promo');

$routes->get('/admin', 'Admin::index');
$routes->get('/payment', "Admin::payment");
$routes->get('/favorite', "Admin::favorite");
$routes->get('/tiket', "Admin::tiket");

$routes->post('/uploadFileDriver','Admin::upload_file_driver');
$routes->get('/download','Home::download');

$routes->post('/send-email', 'Home::kirim_email');
$routes->get('/verifikasi-akun', 'Home::verifikasi_akun');
$routes->get('/destination-group', 'Admin::group_destinasi');


// Profile
$routes->get("/profile",'General::profile');
$routes->get("/berkas",'General::berkas');







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
