<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/front/(:any)', 'Home::hello/$1');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/kategori', 'KategoriController::index');
$routes->get('/kategori/alat_tulis', 'KategoriController::alat_tulis');
$routes->get('/kategori/elektronik', 'KategoriController::elektronik');
$routes->get('/kategori/pakaian', 'KategoriController::pakaian');
$routes->get('/kategori/pertukangan', 'KategoriController::pertukangan');
$routes->get('/kategori/snack', 'KategoriController::snack');