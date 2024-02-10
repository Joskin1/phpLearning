<?php
use Core\Session;
use Core\ValidationException;

error_reporting(E_ALL);
ini_set('display_errors', 1);
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . '/vendor/autoload.php';
session_start();


require BASE_PATH . 'Core/function.php';

require base_path('bootstrap.php');
$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['__method'] ?? $_SERVER["REQUEST_METHOD"];
try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {

    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);
    return redirect($router->previousUrl());
}
Session::unflash();
