<?php
require("header.php");
require("footer.php");

$manager = new FilmsManager();

if ($_POST) {
  $film = new Film($_POST);
  $manager->create($film);

  echo "<script>window.location.href='./index.php'</script>";
}
?>

<h1>Publier un film</h1>
<form class="container-fluid w-75" method="post">
  <label for="title">Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="Le titre du film">
  <label for="text">Text</label>
  <textarea name="text" id="text" rows="10" class="form-control" placeholder="Le résumé du film"></textarea>
  <label for="image">Image</label>
  <input type="url" name="image" id="image" class="form-control" placeholder="L'URL de l'image">
  <label for="date">Date</label>
  <input type="date" name="date" class="form-control" id="date">
  <label for="type"></label>
  <select name="type" id="type" class="form-select ">
    <option value="" selected>---Sélectionnez une catégorie de film---</option>
    <option value="1">Horreur</option>
    <option value="2">Drame</option>
    <option value="3">Action</option>
    <option value="3">SF</option>
    <option value="3">Histoire</option>
    <option value="3">Passion</option>
    <option value="3">Dessin animé</option>
  </select>
  <input type="submit" value="Publier" class="btn btn-warning mt-3"></input>
</form>
</main>