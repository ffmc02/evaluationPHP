<?php
include_once'../../includ/head.php';
include_once 'navbar.php';
?>
<div class="bd container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Partie 4 Les Date</h1>
        </div>
        <div class="col-lg-12 text-center"> 
            <h2>Présentation des exercices</h2>
            <p> Utilisez l'objet DateTime, sauf mention contraire </p>
            <p> Combien reste-t-il de jours avant la fin de votre formation. </p>
            <p> Comment déterminer si une année est bissextile ? </p>
            <p>Montrez que la date du 32/17/2019 est erronée. </p>
            <p>Affichez l'heure courante sous cette forme : 11h25. </p>
            <p>Ajoutez 1 mois à la date courante. </p>
            <p>Que s'est-il passé le 1000200000 </p>

        </div>
        <div class="col-lg-4 text-center">
            <h3>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</h3>
            <?php
            $date_test = "2009-07-14";
            $good_format = strtotime($date_test);
            ?>
            <p> $date_test = "2009-07-14";</p>
            <p> $good_format = strtotime($date_test);</p>
            <p>le numéro de semaine est le :<?= date('W', $good_format) ?></p>
        </div>
        <div class="col-lg-4 text-center">
            <h3>Combien reste-t-il de jours avant la fin de votre formation.</h3>
            <p>$datetime1 = new DateTime("now");</p>
            <p> $datetime2 = new DateTime('2020-09-25');</p>
            <p> $interval = $datetime1->diff($datetime2);</p>
            <?php
            $datetime1 = new DateTime("now");
            $datetime2 = new DateTime('2020-09-25');
            $interval = $datetime1->diff($datetime2);
            ?>
            <p><?= $interval->format('%R%a jours') ?></p>
        </div>
        <div class="col-lg-4 text-center">
            <h3> Comment déterminer si une année est bissextile ?</h3>

        </div>
        <div class="col-lg-4 text-center">
            <h3>Affichez l'heure courante sous cette forme : 11h25.</h3>
            <p>date('H:i')</p> 
            <p>date_default_timezone_set('Europe/Paris');</p>
            <?php
            date_default_timezone_set('Europe/Paris');
            ?>
            <p><?= date('H:i') ?></p>
        </div>
        <div class="col-lg-4 text-center">
            <h3>Ajoutez 1 mois à la date courante. </h3>
            <?php
            $date = new DateTime("now");
            $date->add(new DateInterval('P1M')); //Où 'P1M' indique 'Période de 1 Moi'
            ?>
            <p>$date = new DateTime("now");</p>
            <p>  $date->add(new DateInterval('P1M')); Où 'P1M' indique 'Période de 1 Moi </p>
            <p><?= $date->format('d-m-Y'); ?></p>
        </div>
        <div class="col-lg-4 text-center">
            <h3>Que s'est-il passé le 1000200000</h3>
            <p>   if(isset($_GET['timestamp']))</p>
            <p>{</p>
            <p>$timestamp = intval($_GET['timestamp']);</p>
            <p>}</p>
            <p>else</p>
            <p>{</p>
            <p>$timestamp = 1000200000;</p>
            <p>}</p>
            <?php
            if (isset($_GET['timestamp'])) {
                $timestamp = intval($_GET['timestamp']);
            } else {
                $timestamp = 1000200000;
            }
            ?>
            <p>Le timestamp est <?= Date('d/m/Y H:i:s', $timestamp) ?> </p>
            <p>l'évenement qui a eu lieu est l'éffondrement de la tours nord du WTC à New York.</p>
        </div>
    </div>

</div>
</div>
<?php
include_once'../../includ/footer.php';
?>
