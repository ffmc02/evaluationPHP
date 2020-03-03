<?php
include_once'../../includ/head.php';
include_once 'navbar.php';

?>
<div class="bd container-fluid">
    <div class="row">
        
        <div class="col-lg-12 text-center">
            <h1><a href="filesIndex.php">Partie 4 Manipulation de fichier</a></h1>
            <h2><a href="readingAFile.php">Lecture d'un fichier</a></h2>
        </div>
        <div class="col-lg-12 text-center"> 
            <h2>Récupération d'un fichier distant</h2>
            <p>Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.</p>
            <p>Cette liste est disponible à cette adresse http://bienvu.net/misc/customers.csv.</p>
            <p>Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont</p>
            <p>séparés par une virgule ,.</p>
        </div>
        <div class="col-lg-12 text-center">
            <p>1)Utilisez la fonction file() pour récupérer le contenu de ce fichier.</p>
            <p>$table= file('customers.csv');</p>
        </div>
        <div class="col-lg-12 text-center">
            <p>2)Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()</p>
            <p> $tables= explode("," , $donnees );</p>
        </div>
        <div class="col-lg-12 text-center">
            <p>3)Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.</p>   
            <?php
            $table = file('../../asset/doc/customers.csv');
            $delimiteur = ',';
            ?>
            <div class="table-responsive-lg">
                <table class="table table-bordered">
                    <thead>      
                        <tr>
                            <th scope="col">Surname</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($table as $donnees) {
                            $tables = explode(",", $donnees);
                            ?>
                            <tr class="table-primary">
                                <td><?= $tables[0] ?></td>
                                <td><?= $tables[1] ?></td>
                                <td><?= $tables[2] ?></td>
                                <td><?= $tables[3] ?></td>
                                <td><?= $tables[4] ?></td>
                                <td><?= $tables[5] ?></td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
<?php
include_once'../../includ/footer.php';
?>
