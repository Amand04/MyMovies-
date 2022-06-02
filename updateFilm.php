<?php
require("header.php");
require("footer.php");
$manager = new FilmsManager();
$film = $manager->getById($_GET["id"]);

if ($_POST) {
    $film->hydrate($_POST);
    $manager->update($film);

    echo "<script>window.location.href='./index.php'</script>";
}
?>
<form class="container-fluid w-75" method="post">
    <h1>Modifier les informations du film <?= $film->getTitle() ?></h1>
    <label for="form-label">Titre</label>
    <input type="text" name="title" id="title" value="<?= $film->getTitle() ?>" class="form-control" placeholder="Le titre du film">
    <label for="form-label">Synopsis</label>
    <textarea name="text" id="text" rows="10" value="<?= $film->getText() ?>" class="form-control" placeholder="Le résumé du film"></textarea>
    <label for="form-label">Image</label>
    <input type="url" name="imageUrl" id="imageUrl" value="<?= $film->getImage() ?>" class="form-control" placeholder="L'URL de l'image">
    <label for="form-label">Date de sortie</label>
    <input type="date" name="releaseDate" value="<?= $film->getDate() ?>" class="form-control" id="releaseDate">
    <label for="form-label"></label>
    <select name="categoryId" id="category" class="form-select ">
        <option value="" selected>---Sélectionnez une catégorie de film---</option>></option>
        <option value="1">Horreur</option>
        <option value="2">Drame</option>
        <option value="3">Action</option>
        <option value="3">SF</option>
        <option value="3">Histoire</option>
        <option value="3">Passion</option>
        <option value="3">Dessin animé</option>
    </select>
    <input type="submit" value="Publier" class="btn btn-warning mt-3">
</form>
</main>