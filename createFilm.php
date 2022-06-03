<?php
require("header.php");


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
  <input type="text" name="image" id="image" class="form-control" placeholder="L'URL de l'image">
  <label for="date">Date</label>
  <input type="date" name="date" class="form-control" id="date">
  <label for="type"></label>
  <select name="type" id="type" class="form-select ">
    <option value="" selected>---Sélectionnez une catégorie de film---</option>
    <option value="Horreur">Horreur</option>
    <option value="Drame">Drame</option>
    <option value="Action">Action</option>
    <option value="Fantastique">Fantastique</option>
    <option value="Histoire">Histoire</option>
    <option value="Passion">Passion</option>
    <option value="Dessin animé">Dessin animé</option>
  </select>
  <input type="submit" value="Publier" class="btn btn-warning mt-3"></input>
</form>
</main>

<?php
require("footer.php");
?>