<?php
require("header.php");
require("footer.php");

$manager = new FilmsManager();
$films = $manager->getAll();
?>


<h1 class="MyMovies">My Movies</h1>
<h3>Découvrez et partagez vos films !</h3>
<img class="logo" src="images\posters-logo-cinema.jpg" alt="Logo My Movies"></img>
</div>
<div>
  <?php foreach ($films as $film) : ?>
    <section class="container d-flex justify-content-center">
      <div class="card m-3" style="width: 300px">
        <div class="card-body">
          <img class="card-img-top" src="<?= $film->getImage() ?>" alt="Card image cap" />
          <h5 class="card-title"><?= $film->getTitle() ?></h5>
          <p class="card-text"><?= $film->getText() ?></p>

          <p class="card-text"><?= $film->getDate() ?></p>
          <p class="card-text"><?= $film->getType() ?></p>
          <a href="updateFilm.php?id= <?= $film->getId() ?>" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier">Modifier</a>
          <a href="deleteFilm.php?id=<?= $film->getId() ?>" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer">Supprimer</a>
        </div>
      </div>
    </section>

  <?php endforeach ?>
  <div class="btn warning m-2">
    <a class="button-publier" href="createFilm.php">Publier un film</a>
  </div>