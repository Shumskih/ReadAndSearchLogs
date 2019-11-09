<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/helpers/consts.php';
require_once ROOT . '/route/Route.php';
require_once ROOT . '/helpers/vardump.php';

session_start();

$route = new Route();
$route->run();

session_unset();

