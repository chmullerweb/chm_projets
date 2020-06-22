<?php include "include/head.php";

// on importe le nomtechno de la bdd en passant par la table de jointure projets_techno
        // on sélectionne uniquement les technos utilisées pour le $projet_select via son id_projet
        $query = $bdd -> query("SELECT nomtechno from projets_technos, projets, technos where 
        projets.id_projet = projets_technos.projet_id
        AND technos.id_techno = projets_technos.techno_id
        AND id_projet = $projet_select[id_projet]");

      $technologies = $query -> fetchAll(PDO::FETCH_ASSOC);
?>

<section class="title-projet">
    <h1><?php echo $projet_select["titre"]?></h1>
</section>
<div class="description">
    <p><?php echo $projet_select["presentation"]?></p>
</div>
<div class="year flex">
    <h2>Année de création :</h2>
    <p><?php echo $projet_select["annee"]?></p>
</div>
<div class="techno">
    <h2>Technologies utilisées :</h2>
    <ul>
        <?php // J'affiche uniquement les technos qui sont référencées pour ce projet dans ma table de jointure projets_techno
           foreach($technologies as $key => $techno){?>
        <li><?php echo $techno["nomtechno"];?></li>
        <?php }; ?>
    </ul>
</div>
<div class="photo_principale">
    <img class="pix-projet-details-main" src="<?php echo $_dossier_template . $projet_select["img_main"]?>" alt="">
</div>
<div class="photo_1">
    <img class="pix-projet-details" src="<?php echo $_dossier_template . $projet_select["img1"]?>" alt="">
</div>
<div class="photo_2">
    <img class="pix-projet-details" src="<?php echo $_dossier_template . $projet_select["img2"]?>" alt="">
</div>

<!-- Je propose à l'utilisateur d'aller voir le site du projet seulement si un lien url existe -->
<?php 
    if(empty($projet_select["lien"]) || $projet_select["lien"] === ""){
    } else {?>
<div class="visit" style="grid-row-start:7; grid-column-end: span 12;">
    <button type="button">
        <a href="<?php echo $projet_select["lien"]?>">Aller voir le site !</a>
    </button>
</div>
<?php } ?>

<!-- Je propose à l'utilisateur de naviguer parmi mes projets -->
<div class="pagination flex" style="grid-row-start:8; grid-column-end: span 12; justify-content:space-evenly;">
    <?php 
        $post = $projet_select["id_projet"]- 1;
        $next = $projet_select["id_projet"]+ 1;

        $query = $bdd -> query("SELECT id_projet from projets");
        $nbIdProjet = $query ->  fetchAll(PDO::FETCH_ASSOC);
         
        if($post === 0){
    ?>
            <button class="next-projet" type="button">
                <a href=" <?php echo $_url_base . "projet.php?projetselect=" . $next ?>">Suivant</a>
            </button>
    <?php
        } else if ($next > count($nbIdProjet)){
    ?>
            <button class="post-projet" type="button">
                <a href=" <?php echo $_url_base . "projet.php?projetselect=" . $post ?>">Précédent</a>
            </button>
    <?php
        } else {
    ?>
            <button class="post-projet" type="button">
                <a href=" <?php echo $_url_base . "projet.php?projetselect=" . $post ?>">Précédent</a>
            </button>
            <button class="next-projet" type="button">
                <a href=" <?php echo $_url_base . "projet.php?projetselect=" . $next ?>">Suivant</a>
            </button>
    <?php
        };
    ?>
</div>


<?php include "include/footer.php";?>
