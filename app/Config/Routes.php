<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

$routes->get('/latestmovies' , 'Home::latestmovies');
$routes->get('/contactus' , 'Home::contactus');
$routes->get('/contact-us' , 'Home::contactus');
 
 
$routes->get('/login-register' , 'Home::loginregister');
$routes->get('/searchmovie' , 'Home::searchmovies');
$routes->get('/testimonials' , 'Home::testimonials');
$routes->get('/upcomming' , 'Movies::upcomming');
$routes->get('/latest' , 'Movies::latest');
$routes->get('/tvshows' , 'Movies::tvshows');
$routes->get('/mostwatched' , 'Movies::mostwatched');
// $routes->get('/details/(:any)' , 'Movies::details/$1');
$routes->get('/details' , 'Movies::details');



$routes->get('/admins' , 'Admin::login');
$routes->post('/admins' , 'Admin::login');
$routes->get('/signup' , 'Admin::signup');
$routes->post('/signup' , 'Admin::signup');

$routes->get('/add_movies' , 'Admin::addmovies');
$routes->post('/addMoviesdata' , 'Admin::addmovies');

$routes->get('/movieslist' , 'Admin::movieslist');

$routes->post('/deleteproduct' , 'Admin::deleteproduct');
 


// $routes->get('/registration' , 'Admin::registration');
// $routes->get('/addcatogery' , 'Admin::addcatogery');
// $routes->get('/catogery' , 'Admin::catogery');
$routes->get('/dashboard' , 'Admin::dashboard');
 


//Api for home screen

$routes->get('/v1/api/latestmovies' , 'HomeMovie::latestmovies');
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
