<?php
include_once '../../controlleur/formCtrl/formExoServeur.php';
include_once'../../includ/head.php';
include_once 'navbar.php';
?>
<div class="bd container-fluid">
    <div class="row">
        <div class="text-center col-lg-12 col-md-12 col-sm-4">
            <h1> Une entreprise vous à laissé un message</h1>
        </div>
         <div class="text-center col-lg-12 col-md-12 col-sm-4">
        <h2>En utilisant le $_POST et un controleur </h2>
        <p>L'entreprise <u><?= $company ?></u>, qui est situé<u> <?= $businessAddress . ', ' . $zipCode . ' ' . $city ?> </u>vous a laissé ce message <u><?= $technicalEnvironment ?></u>   </p>
        <p> La personne qui vous a contacté est <u><?= $contctatPerson ?></u> joinable au<u> <?= $phoneNumber ?></u> ou par mail <u><?= $email ?></u></p>
    </div>
    
    <div class="text-center col-lg-12 col-md-12 col-sm-4">
        <h2>En utilisant le $_RESQUEST{'nom_du_input'}</h2>
        <p>L'entreprise <u><?= $_REQUEST['company'] ?></u>, qui est situé<u> <?= $_REQUEST['businessAddress'] . ', ' . $_REQUEST['zipCode'] . ' ' . $_REQUEST ['city'] ?> </u>vous a laissé ce message <u><?= $_REQUEST ['technicalEnvironment'] ?></u>   </p>
        <p> LA personne qui vous a contacté est <u><?= $_REQUEST ['contactPerson'] ?></u> joinable au<u> <?= $_REQUEST ['phoneNumber'] ?></u> ou par mail <u><?= $_REQUEST ['email'] ?></u></p>
    </div>
</div>
</div>
<?php
include_once'../../includ/footer.php';
?>