<?php
require_once "../vendor/autoload.php";
session_start();
define('BASE_URL', '/hotdog-brasilia');

require_once "../core/router.php";

$router = new Router();

require_once '../core/routes.php';

$router->run();

?>