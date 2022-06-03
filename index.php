<?php
require("header.php");

$manager = new FilmsManager();
$films = $manager->getAll();
?>
<div>

  <h1 class="MyMovies">My Movies</h1>
  <h3 class="title2">Découvrez et partagez vos films !</h3>
  <img class="logo" src="images\posters-logo-cinema.jpg" style="width: 170px" alt="Logo My Movies"></img>
</div>
<div class="container d-flex flex-wrap justify-content-center">

  <?php foreach ($films as $film) : ?>

    <div class="card m-3" style="width: 24rem">
      <div class=" card-body m-1">
        <img class="card-img-top" src="<?= $film->getImage() ?>" alt="Card image cap"></img>
        <h5 class="card-title fw-bolder text-uppercase m-4"><?= $film->getTitle() ?></h5>
        <p class="card-text fw-semibold fs-6"><?= $film->getText() ?></p>
        <p class="card-text"><?= $film->getDate() ?></p>
        <p class="card-text fw-semibold"><?= $film->getType() ?></p>

        <a href="updateFilm.php?id= <?= $film->getId() ?>" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier">Modifier</a>
        <a href="deleteFilm.php?id=<?= $film->getId() ?>" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer">Supprimer</a>

      </div>
    </div>


  <?php endforeach ?>
</div>
<div class="btn warning m-2">
  <a class="button-publier" href="createFilm.php">Publier un film</a>
</div>

<?php
require("footer.php");

?>