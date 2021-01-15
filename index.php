<?php

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
$routes = [
    'hello' => 'pages/hello.php',
    'portfolio' => 'pages/portfolio.php',
    'loisir' => 'pages/loisir.php',
    'parcours' => 'pages/parcours.php',
    'contact' => 'pages/contact.php',
    'error' => 'pages/error.php',
];

/** @define "$routes" "/" */

if (isset($page)) {
    if (array_key_exists($page, $routes)) {
        require $routes[$page];
    } else {
        header("HTTP/1.0 404 Not Found");
        require $routes['error'];
        echo $buffer;
    }
} else {
    require $routes['hello'];
}

date_default_timezone_set('Europe/Paris');




