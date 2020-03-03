<?php
include_once '../config.php';
include_once '../controllers/detailCtrl.php';
include_once 'includ/header.php';
include_once 'includ/navbar.php';
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Details du vinyle </h1>
            </div>
            <div class="col-sm-12 text-center">
                <?php
                foreach ($modelDetailList as $modelDetailListe) {
                    $iddisc = $modelDetailListe->disc_id;
                    if ($iddisc == $dicId) {
                        ?>
                        <div class="row">
                            <div class="detail col-lg-6 col-sm-12 col-md-12 text-center">
                                <p class="deaills">Titre :</p>
                                <p class="deaills"> <?= $modelDetailListe->disc_title ?></p>
                                <p class="deaills">Année : </p>
                                <p class="deaills"><?= $modelDetailListe->disc_year ?></p>
                                <p class="deaills">Label : </p>
                                <p class="deaills"><?= $modelDetailListe->disc_label ?></p>

                            </div>    
                            <div class="col-lg-3 col-sm-12 col-md-12 text-center">
                            <!--<p> <?= $modelDetailListe->disc_id ?></p>-->
                                <p class="deaills">Genre :</p> 
                                <p class="deaills"> <?= $modelDetailListe->disc_genre ?></p>
                                <p class="deaills">Prix : </p>
                                <p class="deaills"> <?= $modelDetailListe->disc_price ?></p>
                                <p class="deaills">Artiste :</p>
                                <p class="deaills"> <?= $modelDetailListe->artist_name ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="detail col-lg-6 col-sm-12 col-md-12 text-center">
                                <p><img csrc="../assets/img/<?= $modelDetailListe->disc_picture ?>"> </p>
                                <p><a href="update_form.php?disc_id=<?= $iddisc ?>"><button class="btn btn-primary">Modifier</button></a>
                                    <a href="delete_form.php?disc_id=<?= $iddisc ?>"> <button class="btn btn-primary">Supprimer</button></a>                                
                                    <a href="../index.php"><button class="btn btn-primary">Retour</button></a></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php
include 'includ/footer.php';
?>
