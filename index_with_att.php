<?php
require_once 'vendor/autoload.php';

$router = new \Els\Router\Router();

// Register your controllers
$router->addController(\Els\Controllers\HomeController::class);

// Dispatch the request
$router->dispatch();


