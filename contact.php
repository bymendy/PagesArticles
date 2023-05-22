<?php
require_once('header.php')
?>


<!-- Section NOUS CONTACTER -->
<section class="margin-top container">
        <div id="bloc-titre" class="text-center p-2 mt-4 my-3">
            <h2>Vous ne trouvez pas réponse à votre question ?</h2>
            <span>Contactez le service client</span>
            </div>

            <div class="d-flex justify-content-between">
            <div class="d-flex flex-column align-items-center">
                <h4>Par email</h4>
                <p><a href="" class="fa fa-envelope"></a> Service client</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <h4>Par téléphone</h4>
                <p>du lundi au vendredi <br>
                    de 9h00 à 18h00 <br>
                    au 01 70 37 61 36
                </p>
            </div>
            <div class="d-flex flex-column ">
                <h4>Par courrier</h4>
                <p>Service Page Article <br>
                    45 avenue du Général Leclerc <br>
                    75000 Paris 
                </p>
            </div>
        </div>
    </section>
    <!-- FORMULAIRE DE CONTACT -->
    <section id="form" class="container margin-top">
    <div class=" margin-b15">
    <span class="mt-4 my-3"><i class="fas fa-edit"></i> Ou via notre formulaire</span>
    </div>

    <form id="formulaire" class="container ">

        <div class="mb-3">
            <label for="raison-demande" class="form-label">Raison de votre demande</label>
            <input type="text" class="form-control" id="raison-demande" placeholder="Raison de votre demande" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Votre prénom" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Votre email</label>
            <input type="email" class="form-control" id="email" placeholder="Votre email" required>
        </div>
        <div class="mb-3">
            <label for="question" class="form-label">Votre question</label>
            <textarea class="form-control" id="question" rows="4" placeholder="Posez votre question" required></textarea>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="consentement" required>
            <label class="form-check-label" for="consentement">
            <span class="me-2">En validant ce formulaire, vous consentez à ce que vos données personnelles soient traitées par Page Article, responsable de traitement, pour la création de votre compte et la gestion de votre abonnement. Pour en savoir plus sur vos droits ainsi que nos traitements et pratiques en matière de données personnelles, cliquez sur le lien ci-dessous :</span>
            </label>
        </div>
        <div>
            <a href="#" class="text-decoration-none">Voir la politique de confidentialité</a>
        </div>
        <button type="submit" class="send-question btn btn-primary mt-3">Envoyer ma question</button>
    </form>
    </section>



<?php require_once('footer.php'); ?>