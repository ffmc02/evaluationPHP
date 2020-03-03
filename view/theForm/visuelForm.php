<?php
;
include_once '../../controlleur/formCtrl/formExoServeur.php';
include_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>accueil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-8nq3OiMMgrVFAHyRMMO+DTfMEciSY+c3Awhj/5ljQ1xck1Uv2BUtMjsjLD8GT5Er" crossorigin="anonymous"/>
        <link href="asset/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

            <div class="bd container-fluid">
                <div class="row">

                    <div class="text-center col-lg-6 col-md-12 col-sm-4">
                        <h1 class="text-success">Evaluation sur l'html</h1>
                        <p class="ennonce text-primary">L'évaluation consiste à réaliser un formulaire en HTML dont la saisie est contrôlée en Javascript.</p>
                        <p class="ennonce text-primary">
                            Pour chaque champ, un contrôle de saisie doit être mis en place. Des messages à destination de l'utilisateur final doivent clairement indiquer les erreurs de saisie.<br>
                            La page doit être réalisée avec un framework CSS.</p>
                        <p class="titleEval" >Formulaire Réalisé pour l'évaluation :</p>
                        <h2>Vos coordonnées</h2>
                        <span class="text-primary" id="succesForm"></span>
                        <form method="post" action="myscript.php"  name="contactCompany" id="formVerif">
                            <p class="text-warning">* Ces zones sont obligatoires pour envoyer le formulaire  </p>
                            <div class="form-group">
                                <label for="company">Société <span class="text-warning">*</span></label>
                                <input type="text" class="form-control text-center"  id="company"  placeholder="Société" name="company">
                                <span class="text-warning" id="society1"></span> 
                            </div>
                            <div class="form-group">
                                <label for="contactPerson">Personne à contacter<span class="text-warning">*</span></label>
                                <input type="text" class="form-control text-center" id="contactPerson"  placeholder="Personne à contacter" name="contactPerson">
                                <span class=" text-warning" id="contactPerson1"></span>
                            </div>
                            <div class="form-group">
                                <label for="businessAddress">Adresse de l'entreprise<span class="text-warning">*</span></label>
                                <textarea class="form-control" id="businessAddress"  rows="3" name="businessAddress"></textarea>
                                <span id="businessAddress1" class="text-warning" ></span>
                            </div>
                            <div class="form-group">
                                <label for="zipCode">code postal <span class="text-warning">*</span></label>
                                <input type="text" class="form-control text-center" id="zipCode"  placeholder="code postal" name="zipCode">
                                <span id="zipCode1" class="text-warning"></span>
                            </div>
                            <div class="form-group">
                                <label for="city">Ville <span class="text-warning">*</span></label>
                                <input type="text" class="form-control text-center" id="city"   placeholder="ville de la soiciété" name="city">
                                <span id="city1" class="text-warning"></span>
                            </div>
                            <div class="form-group">
                                <label for="email1">Email <span class="text-warning">*</span></label>
                                <input type="email" class="form-control text-center" id="email"   placeholder="Email" name="email">
                                <span id="email1" class="text-warning"></span>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Téléphone <span class="text-warning">*</span></label>
                                <input type="tel" class="form-control text-center" id="phoneNumber"  placeholder="Téléphone" name="phoneNumber">
                                <span id="phoneNumber1" class="text-warning"></span></div>
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <label for="technicalEnvironment">Sélectionnez l'environement technique du projet: <span class="text-warning">*</span> </label>
                                    <select class="form-control" id="technicalEnvironment">
                                        <option value="" selected hidden disabled  >choisissez</option>
                                        <option value="Access">Access</option>
                                        <option value="Java">Java</option>
                                        <option value="delphi">Delphi</option>     
                                        <option value="windex">Windev</option>     
                                        <option value="Visual">Visual Basic</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-9">
                                    <textarea class="form-control text-center" id="technicalEnvironment1" rows="6" name="technicalEnvironment"></textarea>
                                    <span id="technicalEnvironment2" class="text-warning"></span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Enregistrer" name="save" id="save" />
                            <input type="reset" class="btn btn-primary" value="Effacer" id="erase" />
                        </form>
                    </div>

                </div>
            </div>
        </main>

        <footer>

        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="asset/JS/script.js"></script>
    </body>
</html>

