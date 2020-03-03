<?php
include_once '../config.php';
include_once '../controllers/add_formCtrl.php';
include_once 'includ/header.php';
include_once 'includ/navbar.php';
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Ajouter un vinyle </h1>
            </div>
            <div class="col-sm-12 col-md-12 text-center">
                    <span class="text-primary" id="succesForm"></span>
                <form method="post" name="add_disc"  id="formAddDisc" enctype="multipart/form-data">
                    <div class="form-group col-lg-8 col-md-12 text-left">
                        <label for="title">Title <span class="text-warning">*</span></label>
                        <input type="text" class="form-control text-left"  id="title"  placeholder="Enter Title" name="title">
                        <span class="text-warning" id="titre"><?= isset($formError['title']) ? $formError['title'] : '' ?></span> 
                    </div>
                    <div class="form-group col-lg-8 col-md-12 text-left">
                        <label for="Artist">Artist <span class="text-warning">*</span> </label>
                        <select class="form-control" id="Artist" name="artist">
                            <option value="0" selected hidden>choisissez</option>
                            <?php foreach ($listerArtists as $artist) { ?>
                                <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-warning" id="artist"><?= isset($formError['artist']) ? $formError['artist'] : '' ?></span> 
                    </div>
                    <div class="form-group col-lg-8 col-md-12 text-left">
                        <label for="year">Year <span class="text-warning">*</span></label>
                        <input type="text" class="form-control text-left" id="year" placeholder="Enter Year" name="year">
                        <span class="text-warning" id="Year"><?= isset($formError['year']) ? $formError['year'] : '' ?></span> 
                    </div>
                    <div class="form-group col-lg-8 col-md-12  text-left">
                        <label for="genre">Genre <span class="text-warning">*</span></label>
                        <input type="text" class="form-control text-left" id="genre" placeholder="Enter Genre (Rock, Pop, Prog ...)" name="Genre">
                        <span class="text-warning" id="Genre"><?= isset($formError['genre']) ? $formError['genre'] : '' ?></span> 
                    </div>
                    <div class="form-group col-lg-8  col-md-12 text-left">
                        <label for="label">Label <span class="text-warning">*</span></label>
                        <input type="text" class="form-control text-left" id="label" placeholder="Enter Label (EMI, Warner, PolyGram, Univers saie ...)" name="Label">
                        <span class="text-warning" id="Label"><?= isset($formError['label']) ? $formError['label'] : '' ?></span> 
                    </div> 
                    <div class="form-group col-lg-8  col-md-12 text-left">
                        <label for="price">Price <span class="text-warning">*</span></label>
                        <input type="text" class="form-control text-left" id="price" placeholder="Price " name="price">
                        <span class="text-warning" id="Price"><?= isset($formError['price']) ? $formError['price'] : '' ?></span> 
                    </div>
                    <div class="form-group col-lg-8 col-md-12 text-left">
                        <label for="picture">Picture <span class="text-warning">*</span></label>
                        <input type="file" class="form-control-file" id="picture" name="picture" aria-describedby="fileHelp">
                        <span class="text-warning" id="Picture"><?= isset($formError['pictrue']) ? $formError['pictrue'] : '' ?></span> 
                    </div>
                    <div class="form-group col-lg-8 col-md-12 text-left">
                        <input class="btn btn-primary" type="submit" id="submit" value="Ajouter" name="submit" /> <a href="../index.php" title="retour"> <button type="button" class="btn btn-primary" >Retour</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include 'includ/footer.php';
?>