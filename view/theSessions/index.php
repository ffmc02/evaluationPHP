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
                                            <a class="dropdown-item"href="../buckles/bucklesIndex.php">Presentation des exercices</a></p> 
                                            <a class="dropdown-item" href="../buckles/exo1.php">exercices 1</a>
                                            <a class="dropdown-item"href="../buckles/exo2.php">exercices2</a> 
                                            <a class="dropdown-item" href="../buckles/exo3.php">exercices3</a> 
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            les tables 
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"href="../tables/tableIndex.php">Présentation des exercices</a> 
                                            <a class="dropdown-item" href="../tables/month.php">Mois de l'année non bissextile</a>
                                            <a class="dropdown-item"href="../tables/capital.php">Capitales</a> 
                                            <a class="dropdown-item" href="../tables/department.php">Les Départements</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            les fonctions
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="../function/functionIndex.php">PrÃ©sentation des exercices</a>
                                            <a class="dropdown-item" href="../function/linkFunction.php">Ecrivez une fonction qui permette de gÃ©nÃ©rer un lien.</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Les dates 
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"href="../date/dateIndex.php">PrÃ©sentation des exercices</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manipulation sur les fichiers 
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"href="../manipulationOnFiles/filesIndex.php">Présentation des exercices</a>
                                            <a class="dropdown-item" href="../manipulationOnFiles/readingAFile.php">Lecture d'un fichier</a>
                                            <a class="dropdown-item"href="../manipulationOnFiles/recorveringARemoteFile.php">Récupération d'un fichier distant</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Les formulaires et serveurs
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"href="../theForm/indexTheForm.php">Présentation</a>
                                            <!--                        <a class="dropdown-item" href="../manipulationOnFiles/readingAFile.php">Lecture d'un fichier</a>
                                                                    <a class="dropdown-item"href="../manipulationOnFiles/recorveringARemoteFile.php">Récupération d'un fichier distant</a>-->
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Connexion aux bases de données avec PDO
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"href="../../veltetRecord/index.php">Présentation</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Les sessions
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"href="index.php">Accueil</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </header>
                    <main>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- colonne central-->
                                    <div id="columnCenter" class=" col-lg-8 px-0">


                                        <div class="registration text-center" id="registration">
                                            <div class="titleGreen">  
                                                <h1>Enregistrez-Vous !</h1>
                                            </div>
                                            <div><p>Pour pouvoir accéder au formulaire points noirs merci de bien vouloir  vous enregistez !
                                                </p></div>
                                            <div class="titleGreen">  
                                                <h2>inscription</h2>
                                            </div>
                                            <div>
                                                <p><?= isset($addUserMessage) ? $addUserMessage : '' ?></p>
                                                <p class="text-warning"><?= isset($formError['register']) ? $formError['register'] : '' ?></p>
                                                <form method="POST" action="#" name="addUser" id="addUser"> 
                                                    <label for="surname">Votre nom:</label>
                                                    <input type="text" placeholder="Votre nom" name="surname" id="surname" value=""/>
                                                    <span class="text-warning" id="surnameError"></span> 
                                                    <p class="text-warning"><?= isset($formError['surname']) ? $formError['surname'] : '' ?></p> 
                                                    <label for="firstname">Votre prénom:</label>
                                                    <input type="text" placeholder="Votre prénom" name="firstname" id="firstname" value=""/>
                                                    <span class="text-warning" id="firstnameError"></span> 
                                                    <p class="text-warning"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p> 
                                                    <label for="email">Votre mail:</label>
                                                    <input type="text" placeholder="Votre mail" name="email" id="email" value="" />
                                                    <span class="text-warning" id="mailError"></span> 
                                                    <p class="text-warning"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                                                    <label for="password">Votre mot de passe:</label>
                                                    <input type="password" placeholder="Votre mot de passe" name="password" id="password" />
                                                    <span class="text-warning" id="passwordError"></span> 
                                                    <p class="text-warning"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                                                    <label for="password2">Confirmation du mot de passe:</label>
                                                    <input type="password" placeholder="Confirmation de votre MDP" name="confirmPassword" id="password2" />
                                                    <span class="text-warning" id="passwordError2"></span> 
                                                    <p class="text-warning"><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></p>
                                                    <input type="submit" name="registration" value="je m'inscris" />
                                                </form>
                                            </div>        </div>
                                        <div class="registration text-center col-lg-12" id="connexion">
                                            <div class="titleGreen">  
                                                <h1>Connectez-vous !</h1>
                                            </div>
                                            <div><p>Pour pouvoir accéder au formulaire points noirs merci de bien vouloir  vous connecter !
                                                </p></div>
                                            <div class="titleGreen">  
                                                <h2>connexion</h2>
                                            </div>
                                            <form method="POST"> 
                                                <input type="email" name="loginemail" placeholder="Votre mail" />
                                                <p><?= isset($formError['loginemail']) ? $formError['loginemail'] : '' ?></p>
                                                <input type="password" name="loginPassword" placeholder="Votre mot de passe" />
                                                <p><?= isset($formError['loginPassword']) ? $formError['loginPassword'] : '' ?></p>
                                                <input type="submit" name="connexion" value="Se connecter!"  />
                                            </form>
                                            <!--<p><a href="passwordForget">Mot de passe oublié</a></p>-->
                                            <p> <?= isset($connexionError) ? $connexionError : '' ?></p>
                                            <p><?= isset($formError['userExist']) ? $formError['userExist'] : '' ?></p>
                                        </div>
                                        <div class="btnRegistration text-center">
                                            <p class="btn btn-link">Vous n'avez pas de compte alors inscrivez-vous ICI </p>
                                        </div>
                                        <div class="btnExistCompt text-center">

                                            <p class="btn btn-link"> J'ai un compte </p>
                                        </div>
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