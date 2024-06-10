<?php

use Admin\PhpOop1\Controllers\Client\AuthController;
use Admin\PhpOop1\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');
$router->get('/page/{page}',            HomeController::class . '@index');
$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');