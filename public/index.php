<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
$router = new Router();

//login
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//Create
$router->get('/create', [LoginController::class, 'create']);
$router->post('/create', [LoginController::class, 'create']);

//Forgot password
$router->get('/forgot-password', [LoginController::class, 'forgotPassword']);
$router->post('/forgot-password', [LoginController::class, 'forgotPassword']);

//New Password
$router->get('/resete-password', [LoginController::class, 'resetePassword']);
$router->post('/resete-password', [LoginController::class, 'resetePassword']);

//Confirm Account
$router->get('/mesage', [LoginController::class, 'mesageConfirm']);
$router->get('/confirm', [LoginController::class, 'confirm']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();