
<?php

$route = array(

);



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

date_default_timezone_set('Europe/Paris');




