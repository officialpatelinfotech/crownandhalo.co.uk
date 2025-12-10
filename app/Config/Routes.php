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
$routes->get('/terms', 'PageController::terms');
$routes->get('/faqs', 'PageController::faqs');
$routes->get('/book-appointment', 'PageController::book');
$routes->get('/privacy', 'PageController::privacy');

// Dress Collections
$routes->get('/dress-collections', 'CollectionsController::index');
$routes->get('/collections/(:segment)', 'CollectionsController::show/$1');
