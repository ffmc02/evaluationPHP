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
            <a href="exo1.php">exercices1.</a>
        </div>
       <div class="text-center col-lg-12">
            <a href="exo3.php">exercices3 </a>
    </div>
        <div class="text-center col-lg-12">
            <h2>2.Écrire un programme qui écrit 500 fois la phrase: Je dois faire des sauvegardes régulières de mes fichiers</h2>
            <p>
                <?php
                $instruct = 'Je dois faire des sauvegardes régulières de mes fichiers.';
                $a = 1;
                while ($a < 500) {?>
            <p> <?= $instruct?></p>
                 <?php   $a++;
                }
                ?>
            </p>
        </div>
    </div>
</div>
<?php
include_once'../../includ/footer.php';
?>
