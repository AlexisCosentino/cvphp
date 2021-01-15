<?php
$metaTitle = 'ERROR 404';
$metaDescription = 'La page demandé n\'existe pas, merci de vous rediriger.';
include 'header.php';
ob_start();
?>
    <main>
    <div class="container p-5">
        <div class="row">
            <div class="col my-auto">
                <h1 class="text-center">ERROR 404</h1>
                <img src="../image/error404.jpg" alt="erreur"  width="" class="img-fluid">
            </div>
        </div>

    </div>

</main>

<?php
include 'footer.php';

$buffer = ob_get_contents();
ob_get_clean();

?>
