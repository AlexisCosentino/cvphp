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
        require $routes['error'];
    }
} else {
    require $routes['hello'];
}

/*
if (isset($_GET['page'])) {
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    if ($page === 'hello') {
        require 'pages/hello.php';

    } else if ($page === 'portfolio') {
        require 'pages/portfolio.php';

    } else if ($page === 'loisir') {
        require 'pages/loisir.php';

    } else if ($page === 'parcours') {
        require 'pages/parcours.php';

    } else if ($page === 'contact') {
        require 'pages/contact.php';

    } else {
        require 'pages/error.php';
    }

}

else {
    require 'pages/hello.php';
}
*/
date_default_timezone_set('Europe/Paris');




