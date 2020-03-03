<?php
include_once'../../includ/head.php';
include_once 'navbar.php';

?>
<div class="bd container-fluid">
    <div class="row">
        <div col-lg-2 text-left>
            <a href="../../index" title="accueil">accueil</a>
        </div>
        <div class="col-lg-12 text-center">
            <h1>Partie 4 Manipulation de fichier</h1>
        </div>
        <div class="col-lg-12 text-center"> 
            <h2>Lecture d'un fichier </h2>
            <h3>Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.</h3>
            <p><a href="readingAFile.php">Exercices 1</a></p>
        </div> 
        <div class="col-lg-12 text-center">
            <h2>Récupération d'un fichier distant</h2>
           <p>1)Utilisez la fonction file() pour récupérer le contenu de ce fichier.</p>
            <p>2)Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()</p>
            <p>3)Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.</p>  
            <p><a href="recorveringARemoteFile.php">Exercices</a></p>
        </div>
        <div class="col-lg-12 text-center">
          
        </div>
    </div>

</div>
</div>
<?php
include_once'../../includ/footer.php';
?>

