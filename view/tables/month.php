<?php
include '../../controlleur/tableCtrl/monthCtrl.php';
include_once'../../includ/head.php';
include_once 'navbar.php';
?>
<div class="bd container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Partie 2 <a href="tableIndex.php" title="undex partie tableau">Les tableaux</a> </h1>
            <p id="exoAMonthBtn"><a href="capital.php" title="capital">Capitales</a></p> 
            <p><a href="department.php" title="département">Départements</a></p>      
        </div>
        <div class="col-lg-12 text-center"> 
            <h2>Exercices :</h2>
            <h3>1. Mois de l'année non bissextile</h3>
            <p><a href="#exoAMonth">Créez un tableau associan</a>t à chaque mois de l’année le nombre de jours du mois.</p>
            <p><a href="#exoBMonth">B)Utilisez le nom des mois</a> comme clés de votre tableau associatif.</p>
            <p><a href="#exoCMonth">C)Affichez votre tableau </a>(dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.</p>
            <p><a href="#exoCMonth">D)Triez ensuite votre</a >tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.</p>

        </div> 
        <div class="exoA col-lg-12 text-center " id="exoAMonth">
            <h4>A)Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.</h4>
            <?php
            foreach ($month as $cle => $valeur) {
                ?>
                <p><?= $cle . ": " . $valeur . 'jours' ?></p>
            <?php } ?>
        </div>
        <div class="exoB col-lg-12 text-center" id="exoBMonth">
            <h4>B)Utilisez le nom des mois comme clés de votre tableau associatif.</h4>
            <?php
            foreach ($month as $cle => $valeur) {
                ?>
                <p><?= $cle . ": " . $valeur . ' jours' ?></p>
            <?php } ?>
        </div>
        <div class="exoCMonths col-lg-12 text-center" id="exoCMonth">
            <h4>C)Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.</h4>
            <table >
                <thead>
                    <tr>
                        <th>Mois</th>
                        <th>nombre de jours</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($month as $cle => $valeur) {
                        ?>
                        <tr>
                            <td> <?= $cle ?> </td>
                            <td> <?= $valeur ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="exoDMonths col-lg-12 text-center" id="exoDMonth">
            <h4>D)Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.</h4>
            <?php
            asort($month);
            foreach ($month as $cle => $valeur) {
                ?>
                <p><?= $cle . ": " . $valeur . ' jours' ?></p>
            <?php } ?>
        </div>
    </div>

</div>
</div>
<?php
include_once'../../includ/footer.php';
?>