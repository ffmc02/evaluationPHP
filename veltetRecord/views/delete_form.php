<?php
include_once '../config.php';
include_once '../controllers/delete_formCtrl.php';
include_once 'includ/header.php';
include_once 'includ/navbar.php';
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Supprimer le vinyle </h1>
                <div class="col-sm-12 text-center">
                <?php 
                foreach ($modelDetailList as $modelDetailListe) {
                    $iddisc = $modelDetailListe->disc_id;
                    if ($iddisc == $dicsId) {
                        ?>
                    <p> Est vous sur de vouloir supprimer le vinyle <?= $modelDetailListe->disc_title ?></p>
                    
                    <form method="post" name="deleteDiscForm">
                        <input type="hidden" value="<?=$modelDetailListe->disc_id?>" name="id">
                        <input class="btn btn-danger " type="submit" value="Suprimer" name="submit"><a href="../index.php" title="retour"> <button type="button" class="btn btn-primary" >Retour</button></a>
                    </form>
                                 <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include 'includ/footer.php';
?>
