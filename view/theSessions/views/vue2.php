<?php
include_once '../config.php';
include_once 'include/header.php';
include_once 'include/navbar.php';
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php if (isset($_SESSION['connect']) && $_SESSION['connect']=='OK') { ?>
                    <h1>Bonjour <?= $_SESSION['firstname'] ?> </h1>
                </div>
                <div class="col-sm-12 text-center">
                    <p>Votre mail est :<?= $_SESSION['loginMail'] ?> Votre nom de famille est : <?= $_SESSION['surname'] ?></p>
                </div>
                <div class="col-sm-12 text-center">
                    <a href="vue1.php">Vous déconecter</a>
                </div>
                <?php
            } else {
                require 'include/restrictedZone.php';
            }
            ?>
        </div>
    </div>
</main>
<?php
include 'include/footer.php';
?>