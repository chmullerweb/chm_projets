<?php include "include/head.php";

// on importe le contenu de la table technos de ma bdd

global $bdd;

$query = $bdd -> prepare("SELECT * from technos where iduu = :iduu");
$query -> execute([":iduu" => "TEXT_TECHNO"]);
$list_techno = $query ->  fetchAll(PDO::FETCH_ASSOC);

// on importe le contenu de la table projets de ma bdd
$query = $bdd -> prepare("SELECT * from projets where iduu = :iduu");
$query -> execute([":iduu" => "TEXT_PROJET"]);
$list_projet = $query ->  fetchAll(PDO::FETCH_ASSOC);

?>


<div class="title">
    <h1>Mes projets</h1>
</div>

<section class="search bg-sapin">

        <div class="search-bloc flex">
            <img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" class="icone-search">
            <h2>Sélectionnez les projets qui vous intéresse :</h2>
        </div>
        <!--    Pour chaque techno de ma table techno, je l'affiche -->
        <form action="projets_page.php" method="post">
        <div class="techno-list flex">
        <?php foreach($list_techno as $key => $techno){?>
            <div class="flex">
            <input type="checkbox" id="<?php echo $techno["nomtechno"]?>" name="<?php echo $techno["nomtechno"]?>" class="input-search" value="<?php $techno["id_techno"]?>">
                <label for="<?php echo $techno["nomtechno"]?>"><?php echo $techno["nomtechno"]?></label>
            </div>
<?php }; ?>
        <button type="submit" class="valider" style="margin-top: 3rem">Valider</button>
    </form>
</section>

<section class="grid-projet">
        <!--    Pour chaque projet de ma table projets, je l'affiche -->
    <?php foreach($list_projet as $key => $projet){?>
    
    <figure class="bloc-pix-projet" style="margin:0">
        <img class="projet-pix" src="<?php echo $_dossier_template . $projet["img_main"]?>" alt="">
        <figcaption>
            <h3><?php echo $projet["titre"]?></h3>
            <p>Langages : </p>  <!--lister à la suite avec du php -->
            <a href="<?php echo $_url_base?>projet.php"><img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" style="width:2rem"></a>
        </figcaption>
    </figure>
    <?php };?>
</section>



<?php include "include/footer.php"?>
