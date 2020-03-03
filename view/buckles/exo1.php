<?php
include_once'../../includ/head.php';
include_once 'navbar.php';
?>
<div class="bd container-fluid">
    <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Partie1 <a href="bucklesIndex.php">Les boucles</a></h1>
        </div>
        <div class="col-lg-12 text-center">
           <a href="exo2.php">exercices 2</a>
        </div>
        <div class="text-center col-lg-12">
            <a href="exo3.php">exercices3 </a>
    </div>
        </div>
        <div class="col-lg-12 text-center">
            <h2>1.Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</h2>            
           
                <?php
                $counter = 0;
                while ($counter < 150) {
                    $result = $counter++;
                    if ($result % 2 == 1) { ?>
            <p> <?= $result ?> </p>
                     <?php  }
                }
                ?>
            
        </div>
    </div>
</div>
<?php
include_once'../../includ/footer.php';
?>
