<?php
include_once 'config.php';
include_once 'controllers/indexCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?= isset($title) ? $title : '' ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="../../index.php" title="accueil">accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                les boucles 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"href="../../../view/buckles/bucklesIndex.php">Presentation des exercices</a></p> 
                                <a class="dropdown-item" href="../../buckles/exo1.php">exercices 1</a>
                                <a class="dropdown-item"href="../../../view/buckles/exo2.php">exercices2</a> 
                                <a class="dropdown-item" href="../buckles/exo3.php">exercices3</a> 
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                les tables 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"href="../../../view/tables/tableIndex.php">Présentation des exercices</a> 
                                <a class="dropdown-item" href="../../../view/tables/month.php">Mois de l'année non bissextile</a>
                                <a class="dropdown-item"href="../tables/capital.php">Capitales</a> 
                                <a class="dropdown-item" href="../tables/department.php">Les Départements</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                les fonctions
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../../../view/function/functionIndex.php">PrÃ©sentation des exercices</a>
                                <a class="dropdown-item" href="../../../view/function/linkFunction.php">Ecrivez une fonction qui permette de gÃ©nÃ©rer un lien.</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les dates 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"href="../../../view/date/dateIndex.php">PrÃ©sentation des exercices</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manipulation sur les fichiers 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"href="../../../view/manipulationOnFiles/filesIndex.php">Présentation des exercices</a>
                                <a class="dropdown-item" href="../../../view/manipulationOnFiles/readingAFile.php">Lecture d'un fichier</a>
                                <a class="dropdown-item"href="../../../view/manipulationOnFiles/recorveringARemoteFile.php">Récupération d'un fichier distant</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les formulaires et serveurs
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"href="../../../view/theForm/indexTheForm.php">Présentation</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les sessions
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../../../view/theSessions/index.php">Accueil</a>
                            </div>
                        </li>
                    </ul>

                </div>

            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php" title="accueil">accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                VeltetRecord
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"href="views/add_form.php">Ajouter un discque </a></p> 

                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center">
                        <h1>Liste des vinyles disponible</h1>
                    </div>
                    <div class="col-sm-12 text-center">
                        <div class="row">         
                            <?php
                            foreach ($listReadDisc AS $listerDisc) {
                                ?>

                                <div class="col-lg-3 col text-center"> 

                                    <p><img class="imgIndex" src="assets/img/<?= $listerDisc->disc_picture ?>"></p>
                                </div> 
                                <div class="col-lg-3 col-md-12 text-center">
                                    <p class="deaills"><stong>titre: <?= $listerDisc->disc_title ?></stong></p>
                                    <p class="deaills">Année de sortie: <?= $listerDisc->disc_year ?></p>
                                    <p class="deaills">Label: <?= $listerDisc->disc_label ?></p>
                                    <p class="deaills">Genre: <?= $listerDisc->disc_genre ?></p>
                                    <p class="deaills">Artiste: <?= $listerDisc->artist_name ?></p>
                                    <a href="views/details.php?id=<?= $listerDisc->disc_id ?>"><button type="button" class="btn btn-primary">Details</button></a> 
                                </div>

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>