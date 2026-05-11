<?php
session_start();
require_once "../core/router.php";

$router = new Router();

require_once '../core/routes.php';

$router->run();

?>