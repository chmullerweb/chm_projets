<?php include "include/head.php"?>

<div class="title">
    <h1>Mes projets</h1>
</div>

<section class="search bg-sapin">
    <form class="">

        <div class="search-bloc flex">
            <img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" class="icone-search">
            <h2>Sélectionnez les projets qui vous intéresse :</h2>
        </div>
        <!--
    PENSEZ A FAIRE UNE FONCTION QUI AFFICHE LES DONNEES DU TABLEAU TECHNO
-->
        <div class="techno-list flex">
            <div class="flex">
                <input type="checkbox" id="html" name="html" class="input-search">
                <label for="html">HTML5</label>
            </div>

            <div class="flex">
                <input type="checkbox" id="css" name="css" class="input-search">
                <label for="css">CCS3</label>
            </div>

            <div class="flex">
                <input type="checkbox" id="javascript" name="javascript" class="input-search">
                <label for="javascript">Javascript</label>
            </div>

            <div class="flex">
                <input type="checkbox" id="php" name="php" class="input-search">
                <label for="php">PHP</label>
            </div>
        </div>

        <button class="valider">Valider</button>
    </form>
</section>

<section class="grid-projet">
    <figure class="bloc-pix-projet" style="margin:0">
        <img class="projet-pix" src="<?php echo $_dossier_template ?>img/Codevores1.jpg" alt="">
        <figcaption>
            <h3>Codevores</h3>
            <p>Langages : </p>  <!--lister à la suite avec du php -->
            <a href="<?php echo $_url_base?>projet.php"><img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" style="width:2rem"></a>
        </figcaption>
    </figure>
    <figure class="bloc-pix-projet" style="margin:0">
    <img class="projet-pix" src="<?php echo $_dossier_template ?>img/museum1.jpg" alt="">
        <figcaption>
            <h3>Museum</h3>
            <p>Langages : </p>  <!--lister à la suite avec du php -->
            <a href="<?php echo $_url_base?>projet.php"><img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" style="width:2rem"></a>
        </figcaption>
    </figure>


</section>

<!--Barre de navigation à creuser pour compiler JS/PHP-->
<!--    <form class="flex search-bloc">
    <img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" class="icone-search">
    <input type="text" placeholder="HTML5, Javascript, Grid..." class="input-search">
    </form>-->


<?php include "include/footer.php"?>
