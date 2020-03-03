<?php
include '../../controlleur/tableCtrl/departmentCtrl.php';
include_once'../../includ/head.php';
include_once 'navbar.php';
?>
<div class="bd container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Partie 2 <a href="tableIndex.php">Les tableaux</a> </h1>
            <p><a href="month.php">1. Mois de l'année non bissextile</a></p> 
            <p><a href="capital.php">Capitales</a></p>
        </div>
        <div class="col-lg-12 text-center"> 
            <h2>Exercices : Les Départements</h2>
            <p><a href="#exoDepartmnetA">Affichez la liste des régions </a>(par ordre alphabétique) suivie du nom des départements</p>
            <p><a href="#exoDepartmentB">Affichez la liste des régions</a> suivie du nombre de départements</p>

        </div> 
        <div class="col-lg-6 text-center" id="exoDepartmnetA">
            <h4>Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</h4>
            <?php
          
            ksort($departements);
            foreach ($departements as $cle => $valeurRegion) {
                ?>
                <?= 'La région ' . $cle . ' à pour département ' ?>
                <?php
                foreach ($valeurRegion as $department => $valeurDepartment) {
                    ?>
                    <p>
                        <?= $valeurDepartment ?>

                    </p>
                    <?php
                }
            }
            ?>
        </div>
        <div class="col-lg-6 text-center" id="exoDepartmentB">
            <h4>Affichez la liste des régions suivie du nombre de départements</h4>
            <?php
            foreach ($departements as $cle => $valeurRegion) {

                foreach ($valeurRegion as $department => $valeurDepartment) {
                    $nbrDeparment = count($valeurRegion);
                }
                ?>
                <p>
                    <?= 'La région ' . $cle . ' à ' . $nbrDeparment . ' départements ' ?>

                </p>
                <?php
            }
            ?>
        </div>
    </div>

</div>
</div>
<?php
include_once'../../includ/footer.php';
?>