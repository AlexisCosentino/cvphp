<?php
$metaTitle = 'Contact';
$metaDescription = 'Si mon profil vous intéresse ou que vous souhaitiez en savoir plus sur mes compétences, vous pouvez
        me contacter par email via le formulaire ci-dessous.';
require 'header.php';


date_default_timezone_set('Europe/Paris');           //Créer la date

$filename = 'contact/contact_' . date('Y-m-d-H-i-s') . '.txt';      //Créer le fichier texte avec la date dynamique


//Filter Input
/*
$email = filter_input(INPUT_POST, 'email');
$sexe = filter_input(INPUT_POST, 'sexe');
$nom = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
$demande = filter_input(INPUT_POST, 'demande');
$message = filter_input(INPUT_POST, 'texte', FILTER_SANITIZE_STRING);
$submit = filter_input(INPUT_POST, 'submit');
*/
$emailvalid = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);





$args = array(                                            //Filtre de nettoyage
        'email' => FILTER_DEFAULT,
        'sexe' => FILTER_SANITIZE_STRING,
        'name' => FILTER_SANITIZE_STRING,
        'firstname' => FILTER_SANITIZE_STRING,
        'telephone' => FILTER_SANITIZE_NUMBER_INT,
        'demande' => FILTER_SANITIZE_SPECIAL_CHARS,
        'texte' => FILTER_SANITIZE_STRING,
        'submit' => FILTER_DEFAULT,
);

$myinputs = filter_input_array(INPUT_POST, $args);  //Filtre de validation avec les valeurs du tableau




//Tableau avec les filter input
$data = [
    "Email : " . $myinputs['email'], PHP_EOL,
    "Sexe : " . $myinputs['sexe'], PHP_EOL,
    "Nom : " . $myinputs['name'], PHP_EOL,
    "Prénom : " . $myinputs['firstname'], PHP_EOL,
    "Téléphone : " . $myinputs['telephone'], PHP_EOL,
    "Demande : " . $myinputs['demande'], PHP_EOL,
    "Message : " . $myinputs['texte'], PHP_EOL,
];

$formulaireok = true;
$formErrors = [];                                                                        //Tableau d'erreur qui se rempli en fonction des conditions

if (isset($myinputs['submit'])) {
    if (empty($myinputs['email'])) {
        $formErrors['email'] = "Vous n'avez pas renseigné votre email";
        $formulaireok = false;
    }

    if (empty($emailvalid)) {
        $formErrors['emailvalide'] = "Merci de rentrer une adresse email valide";
        $formulaireok = false;
    }

    if (empty($myinputs['name'])) {
        $formErrors['name'] = "Vous n'avez pas renseigné votre nom";
        $formulaireok = false;
    }
    if (empty($myinputs['firstname'])) {
        $formErrors['firstname'] = "Vous n'avez pas renseigné votre prénom";
        $formulaireok = false;
    }
    if (empty($myinputs['telephone'])) {
        $formErrors['telephone'] = "Vous n'avez pas renseigné votre numéro de telephone";
        $formulaireok = false;
    }
    if (empty($myinputs['demande'])) {
        $formErrors['demande'] = "Vous n'avez pas renseigné votre demande";
        $formulaireok = false;
    }
    if (empty($myinputs['texte'])) {
        $formErrors['texte'] = "Vous n'avez pas renseigné votre message";
        $formulaireok = false;

    } else if (strlen($myinputs['texte']) < 5) {
        $formErrors['textelength'] = "Le message doit contenir un minimum de 5 caractères";
        $formulaireok = false;
    }
    if ($formulaireok) {
        $messageok = "Votre demande à bien été envoyé !";
        file_put_contents($filename, $data, FILE_APPEND);       // Si tout est bien rempli, le formulaire s'envoit
    }
}

?>

<main>

    <div id="contact" class="container-fluid text-center p-5">

        <div class="container text-center">
            <h1 class="p-3" data-aos="fade-up">CONTACT</h1>

            <div class="row">
                <div class="col col-lg-6 mx-auto" data-aos="fade-up">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45200.03920071139!2d4.881364696834596!3d44.923285699050595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f55799c63221c7%3A0x408ab2ae4bfb580!2s26000%20Valence!5e0!3m2!1sfr!2sfr!4v1608471067770!5m2!1sfr!2sfr"
                            width="400" height="300" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>

                <div class="col col-lg-6">
                    <form action="/index.php?page=contact" method="POST">

                        <div class="text-danger"> <?php
                            if (isset($formErrors['email'])) {
                                echo $formErrors['email'];
                            } else if (isset($formErrors['emailvalide'])) {
                                echo $formErrors['emailvalide'];
                            } ?> </div>
                        <div class="mb-3 row  mx-auto" data-aos="fade-up">
                            <label for="e-mail" class="form-label">Adresse E-mail</label>
                            <input type="text" class="form-control" id="e-mail" name="email"
                                   placeholder="Saisir E-mail">
                        </div>

                        <div class="mb-3 row  mx-auto" data-aos="fade-up">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexe" id="Mme" value="Mme"
                                       checked>
                                <label class="form-check-label1" for="Mme">
                                    Mme
                                </label>
                            </div>
                            <div class="form-check  ml-3" data-aos="fade-up">
                                <input class="form-check-input" type="radio" name="sexe" id="Mr" value="Mr">
                                <label class="form-check-label1" for="Mr">
                                    Mr
                                </label>
                            </div>
                        </div>


                        <div class="text-danger"> <?php
                            if (isset($formErrors['name'])) {
                                echo $formErrors['name'];
                            } ?> </div>
                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control" id="nom"
                                   placeholder="Saisir votre Nom">
                        </div>

                        <div class="text-danger"> <?php
                            if (isset($formErrors['firstname'])) {
                                echo $formErrors['firstname'];
                            } ?> </div>
                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="firstname" class="form-control" id="prenom"
                                   placeholder="Saisir votre Prénom">
                        </div>

                        <div class="text-danger"> <?php
                            if (isset($formErrors['telephone'])) {
                                echo $formErrors['telephone'];
                            } ?> </div>
                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="text" name="telephone" class="form-control" id="tel"
                                   placeholder="Saisir N° de Téléphone">
                        </div>


                        <div class="text-danger"> <?php
                            if (isset($formErrors['demande'])) {
                                echo $formErrors['demande'];
                            } ?> </div>
                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="demande">Votre demande : </label>

                            <select name="demande" id="demande" class="form-control">
                                <option value="">--Merci de choisir--</option>
                                <option value="Proposition d'emploi">Proposition d'emploi</option>
                                <option value="Demande d'information">Demande d'information</option>
                                <option value="Prestations">Prestations</option>
                            </select>
                        </div>


                        <div class="text-danger"> <?php
                            if (isset($formErrors['texte'])) {
                                echo $formErrors['texte'];
                            } else if (isset($formErrors['textelength'])) {
                                echo $formErrors['textelength'];
                            }
                            ?> </div>
                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="texte" class="form-label">Votre message</label>
                            <textarea class="form-control" id="texte" name="texte" rows="3"
                                      placeholder="Saisir message, 5 caractères minimum"></textarea>
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <input type="submit" value="Envoyer E-mail" name="submit"
                                   class="btn btn-lg btn-outline-dark mx-auto my-2">
                        </div>
                        <div class="text-success"> <?php
                            if (isset($messageok)) {
                                echo $messageok;
                            }
                            ?> </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php

require 'footer.php';

?>
