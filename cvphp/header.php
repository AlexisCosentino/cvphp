<?php

session_start();
if (!isset($_SESSION['dateFirstVisit'])) {
    $_SESSION['dateFirstVisit'] = "Première visite le " . date('Y-m-d') . " à " . date('H') . ":" . date('i-s');
}

if (!isset($_SESSION['countViewPage'])) {
    $_SESSION['countViewPage'] = 1;
} else {
    $_SESSION['countViewPage']++;
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

    <title> <?= $metaTitle ; ?> </title>
    <meta name="description"
          content= <?= '$metaDescription'; ?> >
</head>

<body>
<header class=" container-fluid bg-black">


    <div class="container-fluid bg-white">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light text-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark" href="/index.php?page=hello">Hello</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark" href="/index.php?page=portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark" href="/index.php?page=loisir">Loisirs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark" href="/index.php?page=parcours">Parcours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-lg bg-white text-dark m-1 btn-outline-dark" href="/index.php?page=contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>


    <!-- Wave background -->
    <div style="height: 90px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                                                      style="height: 100%; width: 100%;">
            <path d="M-9.31,5.44 C146.44,61.67 271.49,-49.98 524.54,39.95 L500.00,0.00 L0.00,0.00 Z"
                  style="stroke: none; fill: rgb(255, 255, 255);"></path>
        </svg></div>


    <div class="container bg-black pt-1">

        <div class="row">
            <div class="col-lg-4 text-light bg-black mx-auto my-auto">
                <p class="h1" data-aos="fade-up">ALEXIS</p>
                <p class="h1" data-aos="fade-up">COSENTINO</p><br>
                <p class="h3" data-aos="fade-up">Technicien Développeur.</p>
            </div>
            <div class="col-lg-8">
                <img src="image/alexis.jpg" alt="Photo de alexis cosentino" class="img-fluid">
            </div>
        </div>



    </div>

</header>