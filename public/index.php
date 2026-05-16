<?php
require_once "../vendor/autoload.php";
session_start();
define('BASE_URL', '/hotdog-brasilia');
define('BASE_PATH', dirname(__DIR__));

require_once "../core/router.php";

$router = new Router();

require_once '../core/routes.php';

$router->run();

?>