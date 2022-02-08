<?php

require_once(dirname(__FILE__) . '/src/config/config.php');

$uri =
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = explode("/bipe/", $uri);
$uri = $uri[1];

$metodo = explode("/", $uri);
if ((count($metodo) > 1) and ($metodo[1] != "")) {
    $metodo = $metodo[1];
} else {
    $metodo = "index";
}

$controller = explode("/", $uri);;
$controller = $controller[0];

if ($controller === '/' || $controller === '' || $controller === '/index.php') {
    $controller = 'home';
}


if (file_exists(CONTROLLER_PATH . "/{$controller}.php")) {
    require_once(CONTROLLER_PATH . "/{$controller}.php");
}



$class = "\\src\\Controllers\\" . $controller;


if (class_exists($class)) {
    $active = new $class;
}

if (method_exists($active, $metodo)) {
    $active->$metodo();
}