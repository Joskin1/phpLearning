<?php
$router->get('/', "index.php");
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get(  '/tracks', 'tracks/index.php');
$router->get(   '/track/store', 'tracks/store.php');
$router->get(   '/track/create', 'tracks/create.php');
$router->post(   '/tracks', 'tracks/store.php');

$router->get(   '/track/edit', 'tracks/edit.php');

$router->get('/track', 'tracks/show.php');

$router->delete('/track', 'tracks/destroy.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');
$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->post('/sessions', 'session/destroy.php')->only('auth');
// $router->delete('/session', 'session/destroy.php')->only('auth');






