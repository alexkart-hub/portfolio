<?php

use app\core\Route;

require_once $_SERVER['DOCUMENT_ROOT'] . '/include/helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$route = new Route;
$route->start(); // запускаем маршрутизатор
