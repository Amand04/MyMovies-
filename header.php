<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
    <title>My Movies</title>
</head>

<body>
    <header>

        <main>
            <nav class="navbar navbar-expand-lg bg-">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php"><i class="bi bi-film text-warning" style="font-size: 20px"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Tous les films</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="createFilm.php">Publier un film</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>
    </header>

    <?php
    function loadClasses($class)
    {
        if (strpos($class, 'Manager')) {
            require "Controllers/$class.php";
        } else {
            require "Models/$class.php";
        }
    }

    spl_autoload_register("loadClasses");

    ?>