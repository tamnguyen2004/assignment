<?php

use Admin\PhpOop1\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');