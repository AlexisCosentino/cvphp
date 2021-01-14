<?php
/*
echo $_POST['email'];
echo $_POST['sexe'];
echo $_POST['name'];
echo $_POST['firstname'];
echo $_POST['telephone'];
echo $_POST['demande'];
echo $_POST['texte']; */


date_default_timezone_set('Europe/Paris');           //Créer la date

$filename = 'contact/contact_' . date('Y-m-d-H-i-s') . '.txt';      //Créer le fichier texte avec la date dynamique


//Filter Input
$email = filter_input(INPUT_POST, 'email');
$emailvalid = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$sexe = filter_input(INPUT_POST, 'sexe');
$nom = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
$demande = filter_input(INPUT_POST, 'demande');
$message = filter_input(INPUT_POST, 'texte', FILTER_SANITIZE_STRING);
$submit = filter_input(INPUT_POST, 'submit');

//Tableau avec les filter input
$data = [
    "Email : " . $email, PHP_EOL,
    "Sexe : " . $sexe, PHP_EOL,
    "Nom : " . $nom, PHP_EOL,
    "Prénom : " . $prenom, PHP_EOL,
    "Téléphone : " . $telephone, PHP_EOL,
    "Demande : " . $demande, PHP_EOL,
    "Message : " . $message, PHP_EOL,
];

$formulaireok = true;
$error = [];                                                                        //Tableau d'erreur qui se rempli en fonction des conditions

if (isset($submit)) {
    if (empty($email)) {
        $error['email'] = "Vous n'avez pas renseigné votre email";
        $formulaireok = false;
    }

    if (empty($emailvalid)) {
        $error['emailvalide'] = "Merci de rentrer une adresse email valide";
        $formulaireok = false;
    }

    if (empty($nom)) {
        $error['name'] = "Vous n'avez pas renseigné votre nom";
        $formulaireok = false;
    }
    if (empty($prenom)) {
        $error['firstname'] = "Vous n'avez pas renseigné votre prénom";
        $formulaireok = false;
    }
    if (empty($telephone)) {
        $error['telephone'] = "Vous n'avez pas renseigné votre numéro de telephone";
        $formulaireok = false;
    }
    if (empty($demande)) {
        $error['demande'] = "Vous n'avez pas renseigné votre demande";
        $formulaireok = false;
    }
    if (empty($message)) {
        $error['texte'] = "Vous n'avez pas renseigné votre message";
        $formulaireok = false;
    } else if (strlen($message) < 5) {
        $error['textelength'] = "Le message doit contenir un minimum de 5 caractères";
        $formulaireok = false;
    }
    if ($formulaireok) {
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

                        <div class="mb-3 row  mx-auto" data-aos="fade-up">

                            <div class="text-danger"> <?php
                                if (isset($error['email'])) {
                                    echo $error['email'];
                                } else if (isset($error['emailvalide'])) {
                                    echo $error['emailvalide'];
                                } ?> </div>
                            <br>

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

                        <div class="mb-3 row mx-auto" data-aos="fade-up">

                            <div class="text-danger"> <?php
                                if (isset($error['name'])) {
                                    echo $error['name'];
                                } ?> </div>
                            <br>

                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control" id="nom"
                                   placeholder="Saisir votre Nom">
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">

                            <div class="text-danger"> <?php
                                if (isset($error['firstname'])) {
                                    echo $error['firstname'];
                                } ?> </div>
                            <br>

                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="firstname" class="form-control" id="prenom"
                                   placeholder="Saisir votrer Prénom">
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">

                            <div class="text-danger"> <?php
                                if (isset($error['telephone'])) {
                                    echo $error['telephone'];
                                } ?> </div>
                            <br>

                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="text" name="telephone" class="form-control" id="tel"
                                   placeholder="Saisir N° de Téléphone">
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">

                            <div class="text-danger"> <?php
                                if (isset($error['demande'])) {
                                    echo $error['demande'];
                                } ?> </div>
                            <br>

                            <label for="demande">Votre demande : </label>

                            <select name="demande" id="demande" class="form-control">
                                <option value="">--Merci de choisir--</option>
                                <option value="Proposition d'emploi">Proposition d'emploi</option>
                                <option value="Demande d'information">Demande d'information</option>
                                <option value="Prestations">Prestations</option>
                            </select>
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">

                            <div class="text-danger"> <?php
                                if (isset($error['texte'])) {
                                    echo $error['texte'];
                                } else if (isset($error['textelength'])) {
                                    echo $error['textelength'];
                                }
                                ?> </div>
                            <br>

                            <label for="texte" class="form-label">Votre message</label>
                            <textarea class="form-control" id="texte" name="texte" rows="3"
                                      placeholder="Saisir message"></textarea>
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <input type="submit" value="Envoyer E-mail" name="submit"
                                   class="btn btn-lg btn-outline-dark mx-auto my-2">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php


?>
