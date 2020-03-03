<?php
include_once 'controlleur/indexCtrl.php';

//include_once '../includ/navbar.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>accueil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-8nq3OiMMgrVFAHyRMMO+DTfMEciSY+c3Awhj/5ljQ1xck1Uv2BUtMjsjLD8GT5Er" crossorigin="anonymous"/>
        <link href="../asset/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index" title="accueil">accueil</a>
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
                        <a class="dropdown-item"href="view/buckles/bucklesIndex.php">Presentation des exercices</a></p> 
                        <a class="dropdown-item" href="view/buckles/exo1.php">exercices 1</a>
                        <a class="dropdown-item"href="view/buckles/exo2.php">exercices2</a> 
                        <a class="dropdown-item" href="view/buckles/exo3.php">exercices3</a> 
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        les tables 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="view/tables/tableIndex.php">Présentation des exercices</a> 
                        <a class="dropdown-item" href="view/tables/month.php">Mois de l'année non bissextile</a>
                        <a class="dropdown-item"href="view/tables/capital.php">Capitales</a> 
                        <a class="dropdown-item" href="view/tables/department.php">Les Départements</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        les fonctions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="view/function/functionIndex.php">PrÃ©sentation des exercices</a>
                        <a class="dropdown-item" href="view/function/linkFunction.php">Ecrivez une fonction qui permette de gÃ©nÃ©rer un lien.</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Les dates 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="view/date/dateIndex.php">PrÃ©sentation des exercices</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Manipulation sur les fichiers 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="view/manipulationOnFiles/filesIndex.php">Présentation des exercices</a>
                        <a class="dropdown-item" href="view/manipulationOnFiles/readingAFile.php">Lecture d'un fichier</a>
                        <a class="dropdown-item"href="view/manipulationOnFiles/recorveringARemoteFile.php">Récupération d'un fichier distant</a>
                    </div>
                </li>
                                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Les formulaires et serveurs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="view/theForm/indexTheForm.php">Présentation</a>
<!--                         <a class="dropdown-item"href="../theForm/
                   <a class="dropdown-item"href="../theForm/>-->
                    </div>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Connexion aux bases de données avec PDO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="veltetRecord/index.php">Présentation</a>
                    </div>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Les sessions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="view/theSessions/index.php">Accueil</a>
                    </div>
                </li>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Evaluation PHP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"href="view/phpEvaluation//index.php">Accueil</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
</header>
        <main>
            <div class="bd container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center border">
                        <h1>Exercices PHP MCV AJAX SECURITE PUBLICATION.</h1>
                    </div>
                    <div class="col-lg-3 col-lm-12 col-sm-12">
                        <h2>Les boucles</h2>
                        <p><a href="view/buckles/bucklesIndex.php">Presentation des exercices</a></p> 
                        <p><a href="view/buckles/exo1.php">exercices 1</a></p> 
                        <p><a href="view/buckles/exo2.php">exercices2</a></p> 
                        <p><a href="view/buckles/exo3.php">exercices3</a></p> 
                    </div>
                    <div class="col-lg-3 col-mg-12 col-sm-12">
                        <h2> les tableaux</h2>
                        <p><a href="view/tables/tableIndex.php">PrÃ©sentation des exercices</a></p>
                        <p><a href="view/tables/month.php">Mois de l'annÃ©e non bissextile</a></p>
                        <p><a href="view/tables/capital.php">Capitales</a></p>
                        <p><a href="view/tables/department.php">Les DÃ©partements</a></p>
                    </div>

                    <div class="col-lg-3 col-sm-12 col-mg-12">
                        <h2>Les fonctions</h2>
                        <p><a href="view/function/functionIndex.php">PrÃ©sentation des exercices</a></p>
                        <p><a href="view/function/linkFunction.php">Ecrivez une fonction qui permette de gÃ©nÃ©rer un lien.</a></p>
                        <p><a href="view/function/linkFunction.php">Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</a></p>
                        <p><a href="view/function/linkFunction.php">CrÃ©er une fonction qui vÃ©rifie le niveau de complexitÃ© d'un mot de passe</a></p>
                    </div>
                    <div class="col-lg-3 col-mg-12 col-sm-12 text-center">
                        <h2>Les dates</h2>
                        <p><a href="view/date/dateIndex.php">PrÃ©sentation des exercices</a></p>
                        <p>Utilisez l'objet DateTime, sauf mention contraire.</p>
                        <p> Trouvez le numÃ©ro de semaine de la date suivante : 14/07/2019.</p>
                        <p> Combien reste-t-il de jours avant la fin de votre formation.</p>
                        <p>  Comment déterminer si une année est bissextile ?</p>
                        <p>  Montrez que la date du 32/17/2019 est erronÃ©e.</p>
                        <p>  Affichez l'heure courante sous cette forme : 11h25.</p>
                        <p>Ajoutez 1 mois Ã  la date courante.</p>
                        <p>  Que s'est-il passÃ© le 1000200000</p>
                        </p>
                    </div>
                    <div class="col-lg-3 col-mg-12 col-sm-12 text-center">
                        <h2>Manipulation sur les fichiers</h2>
                        <p><a href="view/manipulationOnFiles/filesIndex.php">Présentation des exercices</a></p>
                        <h3><a href="view/manipulationOnFiles/readingAFile.php">Lecture d'un fichier</a></h3>

                        <p>Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.</p>
                        <p>Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.</p>
                        <h3><a href="view/manipulationOnFiles/recorveringARemoteFile.php">Récupération d'un fichier distant</a></h3>
                        <p>Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.</p>
                        <p>Cette liste est disponible à cette adresse http://bienvu.net/misc/customers.csv.</p>
                        <p>Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont</p>
                        <p>séparés par une virgule ,.</p>
                        <p>1)Utilisez la fonction file() pour récupérer le contenu de ce fichier.</p>
                        <p>2)Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()</p>
                        <p>3)Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.</p>            
                    </div>
                    <div class="col-lg-3 col-mg-12 col-sm-12 text-center">
                        <h2><a href="view/theForm/indexTheForm.php">Les formulaires et les variables serveur</a></h2>
                        <p>Reprenez le formulaire que vous avez réalisé dans la séance précédente (JavaScript). Dans ce formulaire, vous devez modifier l'attribut action de la balise form pour indiquer l'adresse d'un script PHP.</p>
                        <p>Puis créer un script PHP permettant d'afficher l'ensemble des valeurs transmises.</p>             
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

