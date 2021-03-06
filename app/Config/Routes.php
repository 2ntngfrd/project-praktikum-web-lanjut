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
$routes->get('/', 'Navigation::index', ['filter' => 'auth']);
$routes->get('/guest', 'Navigation::gHome');
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
// $routes->post('/register/save', 'Register::save');
// $routes->get('/register', 'Register::index');

// Hasil merge routes nopri, bintang ke raymond
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
//Admin Routes
$routes->get('/admin/manage/accounts', 'AccountManagementController::index', ['filter' => 'admin']);
$routes->get('/admin/manage/accounts/add', 'AccountManagementController::add', ['filter' => 'admin']);
$routes->get('/admin/manage/accounts/edit', 'AccountManagementController::edit');
$routes->get('/admin/manage/accounts/delete/(:num)', 'AccountManagementController::delete/$1', ['filter' => 'admin']);
$routes->post('/admin/manage/accounts/save', 'AccountManagementController::save', ['filter' => 'admin']);
$routes->get('/admin/settings', 'Admin::settings', ['filter' => 'admin']);
$routes->post('/admin/settings/save', 'Admin::save', ['filter' => 'admin']);
//User Routes
$routes->get('/template', 'Navigation::template', ['filter' => 'user']);
$routes->get('/product', 'ProductController::product', ['filter' => 'user']);
$routes->get('/product/add', 'ProductController::add_product', ['filter' => 'user']);
$routes->post('/product/save-new', 'ProductController::save_new', ['filter' => 'user']);
$routes->get('/product/edit/(:num)', 'ProductController::edit_product/$1', ['filter' => 'user']);
$routes->post('/product/save-edit/(:num)', 'ProductController::save_edit/$1', ['filter' => 'user']);
$routes->get('/product/delete/(:num)', 'ProductController::delete_product/$1', ['filter' => 'user']);
$routes->get('/user/settings', 'User::settings', ['filter' => 'user']);
$routes->post('/user/settings/save', 'User::save', ['filter' => 'user']);
$routes->get('/user/cart', 'Navigation::cart_detail', ['filter' => 'user']);
$routes->get('/user/cart/delete/(:num)', 'CartController::delete/$1', ['filter' => 'user']);
$routes->get('/user/cart/checkout', 'Navigation::cart_checkout', ['filter' => 'user']);
$routes->get('/user/cart/checkout/selesai', 'CartController::checkout', ['filter' => 'user']);
$routes->get('/newOrder', 'Order::new');
$routes->get('/sendOrder', 'Order::send');
$routes->get('/sentOrder', 'Order::sent');
$routes->get('/finishOrder', 'Order::finish');
$routes->get('/sendMyOrder', 'Order::sendMyOrder');
$routes->get('/sentMyOrder', 'Order::sentMyOrder');
$routes->get('/finishMyOrder', 'Order::finishMyOrder');
$routes->get('/home', 'Navigation::home');
$routes->get('/product/detail/(:num)', 'Navigation::product_detail/$1');
// End - hasil merge routes nopri, bintang ke raymond

// $routes->get('/', 'Navigation::login');
// $routes->get('/dashboard', 'Navigation::dashboard');
// $routes->post('/dashboard', 'Login::validasi');
// $routes->post('/login', 'Navigation::login');
// $routes->get('/login', 'Navigation::login');

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
