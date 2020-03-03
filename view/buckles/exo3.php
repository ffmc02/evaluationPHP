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
        <div class="col-lg-12 text-center">
            <a href="exo2.php">exercices 2</a>
        </div>
        <div class="text-center col-lg-12">
            <h2>3.Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML, le résultat doit être le suivant :</h2>   
        </div>
        <div class="text-center col-lg-12">
            <table class="border border-wargning text-center" >
                <thead class="border border-wargning text-center">
                    <tr class="border border-wargning text-center">
                        <td class="border border-wargning"></td>
                        <?php for ($nbr = 0; $nbr < 13; $nbr++) { ?> 
                            <td class="border border-wargning"><?= $nbr ?></td>
                        <?php }
                        ?> 
                    </tr>
                </thead>
                <tbody class="border border-wargning text-center">
                    <?php
                    for ($l = 0; $l < 13; $l++) {
                        ?> 
                        <tr class="border border-wargning text-center">
                            <td class="border border-wargning"><?= $l ?></td>
                            <?php
                            for ($c = 0; $c < 13; $c++) {
                                $n = $l * $c;
                                ?> 
                                <td class="border border-wargning">
                                    <?= $n ?>
                                </td>
                            <?php }
                        }
                        ?> 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once'../../includ/footer.php';
?>


