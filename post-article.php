<?php
require_once('header.php')
?>

<div class="margin-top container">
    
  <div class="row">
    <div class="col-lg-8">
      <section id="publier">
        
      <div class="mb-3">
          <label for="categorie" class="form-label"><strong>Catégorie </strong></label>
          <select class="form-select" id="categorie">
            <option selected>Actualité</option>
            <option>Sport</option>
            <option>Divertissement</option>
            <option>Santé</option>
            <option>Technologie</option>
          </select>
        </div>
        <div class="d-flex justify-content-between mb-3">
        <input type="text" class="form-control w-50 " placeholder="Titre de votre article">
          <div>
            <button class="btn btn-secondary me-2">Modifier</button>
            <button class="btn btn-secondary">Aperçu</button>
          </div>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image de couverture</label>
          <input type="file" class="form-control" id="image">
        </div>
        <div class="d-flex justify-content-center mb-3">
          <div class="btn-group">
            <button class="btn btn-secondary"><i class="far fa-image"></i></button>
            <button class="btn btn-secondary"><i class="fas fa-bold"></i></button>
            <button class="btn btn-secondary"><i class="fas fa-italic"></i></button>
            <button class="btn btn-secondary"><i class="fas fa-list-ul"></i></button>
          </div>
        </div>
        <div class="mb-3">
          <textarea class="form-control" rows="8" placeholder="Écrivez le contenu de votre article ici"></textarea>
        </div>
        <div>
          <button class="btn btn-primary">Publié</button>
          <button class="btn btn-secondary">Brouillon</button>
        </div>
      </section>
    </div>
    <div class="col-lg-4">
      <div class="p-2 my-4">
        <div>
          <strong>Écrire un excellent titre d'article</strong>
        </div>
        <p class="text-secondary">Pensez à votre titre d'article comme une description super courte (mais convaincante!) - comme un aperçu de l'article réel en une phrase courte.</p>
        <br>
        <p class="text-secondary">Utilisez des mots-clés lorsque cela est approprié pour aider à garantir que les gens puissent trouver votre article par recherche.</p>
      </div>
    </div>
  </div>
  </div>
</div>




<?php require_once('footer.php'); ?>