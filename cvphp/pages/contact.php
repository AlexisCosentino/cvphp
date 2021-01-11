<?php


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
                    <form action="https://httpbin.org/post" method="POST">

                        <div class="mb-3 row  mx-auto" data-aos="fade-up">
                            <label for="e-mail" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="e-mail" name="email"
                                   placeholder="Saisir e-mail" required>
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
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control" id="nom"
                                   placeholder="Saisir votre Nom">
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="firstname" class="form-control" id="prenom"
                                   placeholder="Saisir votrer Prénom">
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="text" name="firstname" class="form-control" id="tel"
                                   placeholder="Saisir N° de Téléphone">
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <label for="texte" class="form-label">Saisir texte</label>
                            <textarea class="form-control" id="texte" name="texte" rows="3"
                                      placeholder="Saisir message" required></textarea>
                        </div>

                        <div class="mb-3 row mx-auto" data-aos="fade-up">
                            <input type="submit" value="Envoyer mail"
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
