<?php
include '../../controlleur/tableCtrl/capitalCtrl.php';
include_once'../../includ/head.php';
include_once 'navbar.php';
?>
<div class="bd container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Partie 2 <a href="tableIndex.php">Les tableaux</a> </h1>
            <p><a href="month.php">1. Mois de l'année non bissextile</a></p>
            <p><a href="department.php">Départements</a></p>      
        </div>
        <div class="col-lg-12 text-center"> 
            <h2>Exercices : Les Capitales</h2>
            <p><a href="#exoACapital">Affichez la liste des capitales </a>(par ordre alphabétique) suivie du nom du pays.</p>
            <p><a href="#exoBCapital">Affichez la liste des pays (par ordre alphabétique)</a> suivie du nom de la capitale.</p>
            <p><a href="#exoCCapital">Affichez le nombre de pays dans le tableau.</a></p>
            <p><a href="#exoDCapital">Supprimer du tableau toutes les capitales</a> ne commençant par la lettre 'B', puis affichez le contenu du tableau.</p>
        </div> 
        <div class="col-lg-6 text-center"id="exoACapital">
            <h4>Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.</h4>
            <?php
            ksort($capitales);
            foreach ($capitales as $cleCapital => $valeurCapital) {
                ?>
                <p><?= $cleCapital . ' est la Capitale de ' . $valeurCapital ?></p>
            <?php }
            ?>
        </div>
        <div class="exoBCapital col-lg-6 text-center" id="exoBCapital">
            <h4>Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale</h4>
            <?php
            asort($capitales2);
            foreach ($capitales2 as $cleCapital => $valeurCapital) {
                ?>
                <p><?= $valeurCapital . ' a pour Capitale ' . $cleCapital ?></p>
            <?php }
            ?>
        </div>
        <div class="exoCCapital col-lg-12 text-center" id="exoCCapital">
            <h4>Affichez le nombre de pays dans le tableau</h4>
            <?php
            $nbrContry = count($capitales);
            ?>
            <p><?= 'le nombre de pays dans le tableau est de: ' . $nbrContry ?></p>
        </div>
        <div class="exoDCapital col-lg-12 text-center" id="exoDCapital">
            <h4>Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.</h4>
            <p>global $capitales;
            <p> foreach ($capitales as $capitale => $pays) </p>
            <p>  {  </p>
            <p>  if ($capitale[0] != 'B') </p>
            <p>   { </p>
            <p>      unset($capitales[$capitale]); </p>
            <p>      //echo (' |  ' . $capitale . ' -> ' . $pays . '  | '); </p>
            <p>    } </p>
            <p>     //echo (' |  ' . $capitale . ' -> ' . $pays . '  | '); </p>
            <p>  } </p>
            <p>  print_r ($capitales); </p>
            <p>Les capitales ne commençant par la lettre 'B' sont : </p>
            <?php
            foreach ($capitales as $capitale => $pays) {
                if ($capitale[0] == 'B') { ?>
                  <p><?=  $capitale ?></p>
                 <?php    
                            unset($capitales[$capitale]);
                }
               
           
             } ?>

        </div>
    </div>

</div>
</div>
<?php
include_once'../../includ/footer.php';
?>