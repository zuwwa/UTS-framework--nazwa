<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');   
$routes->get('/about', 'About::index');  
$routes->get('/about/pendidikan', 'About::index');
$routes->get('/about/pengalaman', 'About::index');
$routes->get('/about/keahlian', 'About::index');
$routes->get('/about/portofolio', 'About::index');
$routes->get('upload/foto/(:segment)', 'Upload::foto/$1');
$routes->get('cv/download', 'Cv::download');
