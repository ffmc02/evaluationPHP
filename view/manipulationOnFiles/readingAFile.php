<?php
include_once'../../includ/head.php';
include_once 'navbar.php';

?>
<div class="bd container-fluid">
    <div class="row">
      
        <div class="col-lg-12 text-center">
            <h1><a href="filesIndex.php">Partie 4 Manipulation de fichier</a></h1>
            <h2><a href="recorveringARemoteFile.php">Récupération d'un fichier distant</a></h2>
        </div>
        <div class="col-lg-12 text-center"> 
            
            <h2>Lecture d'un fichier</h2>
        </div> 
        <div class="col-lg-12 text-center">
            <h3>Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.</h3>
            <p>Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.</p>
            <code>
            $fp = fopen('../../asset/doc/liens.txt', 'r');
            while (!feof($fp)) {
                $ligne = fgets($fp, 4096);
                ?>
              
             }
           
                </code>  
            <?php
            $fp = fopen('../../asset/doc/liens.txt', 'r');
            while (!feof($fp)) {
                $ligne = fgets($fp, 4096);
                ?>
                <p><a href="<?= $ligne ?>" target="_blank"><?= $ligne ?></a></p>
            <?php }
            ?> 
        </div>
        <div class="col-lg-12 text-center">
            <h3>Seconde façon</h3>
            <code> <p>  $name= file('../../asset/doc/liens.txt');</p>
            <p> foreach($name as $names){ </p>
                 
                 <p>}</p> 
            </code> 
            <?php
            $name = file('../../asset/doc/liens.txt');
            foreach ($name as $names) {
                ?>
                <p><a href="<?= $names ?>"><?= $names ?></a></p>
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
