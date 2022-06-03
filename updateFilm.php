<?php
require("header.php");

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
    <label for="form-label">Text</label>
    <textarea name="text" id="text" rows="10" class="form-control" placeholder="Le résumé du film"><?= $film->getText() ?></textarea>
    <label for="form-label">Image</label>
    <input type="text" name="imageUrl" id="imageUrl" value="<?= $film->getImage() ?>" class="form-control" placeholder="L'URL de l'image">
    <label for="form-label">Date de sortie</label>
    <input type="date" name="date" id="date" value="<?= $film->getDate() ?>" class="form-control">
    <label for="form-label"></label>
    <select name="categoryId" id="category" class="form-select ">
        <option value="<?= $film->getType() ?>" selected><?= $film->getType() ?></option>
        <option value="Horreur">Horreur</option>
        <option value="Drame">Drame</option>
        <option value="Action">Action</option>
        <option value="Fantastique">Fantastique</option>
        <option value="Histoire">Histoire</option>
        <option value="Passion">Passion</option>
        <option value="Dessin animé">Dessin animé</option>
    </select>
    <input type="submit" value="Publier" class="btn btn-warning mt-3">
</form>
</main>

<?php
require("footer.php");
?>