<?php include "include/head.php";

// on importe le contenu de la table technos de ma bdd

global $bdd;

$query = $bdd -> prepare("SELECT * from technos where iduu = :iduu");
$query -> execute([":iduu" => "TEXT_TECHNO"]);
$list_techno = $query ->  fetchAll(PDO::FETCH_ASSOC);

?>


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
        <?php foreach($list_techno as $key => $techno){?>
            <div class="flex">
            <input type="checkbox" id="<?php echo $techno["nomtechno"]?>" name="<?php echo $techno["nomtechno"]?>" class="input-search" value="<?php $techno["id_techno"]?>">
                <label for="<?php echo $techno["nomtechno"]?>"><?php echo $techno["nomtechno"]?></label>
            </div>
<?php }; ?>
            
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
