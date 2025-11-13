<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pendidikan', 'Pendidikan::index');
$routes->get('/pengalaman', 'Pengalaman::index');
$routes->get('/keahlian', 'Keahlian::index');
$routes->get('/portofolio', 'Portofolio::index');
$routes->get('upload/foto/(:segment)', 'Upload::foto/$1');
$routes->get('cv/download', 'Cv::download'); 

