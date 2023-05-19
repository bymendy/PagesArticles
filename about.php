<?php
require_once('header.php')
?>



    <!-- Section A PRPOS DE NOUS -->
    <div class="pt-5  margin-bottom margin-top">
        <div class=" container section-about d-flex justify-content-center text-center  margin-bottom">
            <div class="auto-layout">
                <h3 class="">A propos de nous?</h3>
            </div>
        </div>
        <section id="a-propos" class="container">
        <div class="row d-flex justify-content-center align-items-center">

            <div id="bloc-1" class="col-md-6 text-center">
            <h4 class="title- text-uppercase text-black">PAGE ARTICLE</h4>
            <span>Le Site de tous les articles</span>
            <div class="icons-about">
                <a href="#" target="_blank" class="fa fa-facebook fa-1x" title="facebook"></a>
                <a href="#" target="_blank" class="fa fa-twitter fa-1x" title="twitter"></a>
                <a href="#" target="_blank" class="fa fa-youtube fa-1x" title="youtube"></a>
                <a href="#" target="_blank" class="fa fa-pinterest fa-1x" title="pinterest"></a>
            </div>
            </div>
        
            <div id="bloc-2" class="col-md-6 ">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet beatae iure optio quos ad maiores animi itaque culpa velit dolorem in cum quam fuga aspernatur repudiandae corrupti, dicta laborum cumque. veniet beatae iure optio quos ad maiores animi itaque culpa velit dolorem in cum quam fuga aspernatur repudiandae corrupti, dicta laborum cumque.</p>
            </div>
        
        </div>
        </section>
        <!-- Section NOTRE EQUIPE -->
        <div class="margin-top margin-bottom">
        <h2 class=" container h2-title">Notre equipes</h2>
        </div>
        <section id="team" class=" container">
        <div class="row">
            <div class="col-md-6">
            <div class="card text-center">
                <img class="mx-auto card-img-top rounded-circle" src="img/algovie-poste.png" alt="Image de l'employé 1">
                <div class="card-body">
                <h5 class="card-title">Nom de l'employé 1</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Saepe odit necessitatibus quisquam omnis</p>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card text-center">
                <img class=" mx-auto card-img-top rounded-circle" src="img/adev.png" alt="Image de l'employé 2">
                <div class="card-body">
                <h5 class="card-title">Nom de l'employé 2</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Saepe odit necessitatibus quisquam omnis</p>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
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
</div>

<?php require_once('footer.php'); ?>