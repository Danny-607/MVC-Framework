<?php

$url = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$url = $url === '' ? 'home/index' : ltrim($url, '/'); 

$urlParts = explode('/', $url);

$controllerName = ucfirst($urlParts[0]) . 'Controller';
$methodName = isset($urlParts[1]) ? $urlParts[1] : 'index';
$params = array_slice($urlParts, 2);

$controllerPath = __DIR__ . '/Controllers/' . $controllerName . '.php';

if (file_exists($controllerPath)) {
    require_once $controllerPath;

    $controllerClass = 'App\\Controllers\\' . $controllerName;
    $controller = new $controllerClass;

    if (method_exists($controller, $methodName)) {
        call_user_func_array([$controller, $methodName], $params);
    } else {
        echo "Method not found!";
    }
} else {
    echo "Controller not found!";
}
