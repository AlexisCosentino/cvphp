
<?php

$route = ['test', 'test', 'test'];



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
        $metaTitle = 'Contact';
        $metaDescription = 'Si mon profil vous intéresse ou que vous souhaitiez en savoir plus sur mes compétences, vous pouvez
        me contacter par email via le formulaire ci-dessous.';
        require 'header.php';
        require 'pages/contact.php';
        require 'footer.php';

    } else {
        require 'pages/error.php';
    }

}

else {
    require 'pages/hello.php';
}

date_default_timezone_set('Europe/Paris');




