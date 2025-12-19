<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/products', 'ProductController::index');
$routes->get('/products/(:num)', 'ProductController::show/$1');
$routes->get('/about', 'PageController::about');
$routes->get('/contact', 'PageController::contact');
$routes->post('/contact/send', 'PageController::sendContact');

// Sitemap and informational pages
$routes->get('/sitemap', 'PageController::sitemap');
$routes->get('/gallery', 'PageController::gallery');
$routes->get('/pricing', 'PageController::pricing');
$routes->get('/how-dress-hire', 'PageController::howDressHire');
$routes->get('/terms', 'PageController::terms');
$routes->get('/faqs', 'PageController::faqs');
$routes->get('/book-appointment', 'PageController::book');
$routes->get('/privacy', 'PageController::privacy');

// Dress Collections
$routes->get('/dress-collections', 'CollectionsController::index');
$routes->get('/collections', 'CollectionsController::index');
$routes->get('/collections/(:segment)', 'CollectionsController::show/$1');

// Admin / Auth routes
$routes->get('/admin/login', 'Auth::login');
$routes->post('/admin/login', 'Auth::login');
$routes->get('/admin/logout', 'Auth::logout');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/dresses', 'Admin::dresses');
$routes->get('/admin/dresses/create', 'Admin::create');
$routes->post('/admin/dresses/store', 'Admin::store');
$routes->get('/admin/dresses/edit/(:num)', 'Admin::edit/$1');
$routes->post('/admin/dresses/update/(:num)', 'Admin::update/$1');
$routes->get('/admin/dresses/delete/(:num)', 'Admin::delete/$1');
