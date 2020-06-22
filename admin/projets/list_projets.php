<?php 
include "../../config.php";
include "../include/head_admin.php";

//requête pour la table projets
global $bdd;

    $query = $bdd -> query("SELECT * from projets");
    $val = $query -> fetchAll(PDO::FETCH_ASSOC);
  ?>



<h1>Gestion des projets</h1>
<ul class="menu-admin">

    <?php 
//Affichage des projets depuis la base de donnée

    foreach($val as $projets => $projet){
?>
    <li>
        <!-- Les titres H2 devront faire référence à la bdd -->
        <h2 style="font-size: 1rem"><?php echo $projet["titre"]?></h2>
        <a href="<?php echo $_url_base . "admin/projets/form_projet.php?projetedit=$projet[id_projet]"?>">Modifier</a>
        <a <?php echo "onclick=\" return confirm('Voulez-vous effacer ce projet ?')\"" ?> href="<?php echo $_url_base . "admin/projets/delete_projet.php?projetdelete=$projet[id_projet]" ?>">Supprimer</a>
    </li>
    <?php }; ?>
    <li>
        <button><a href="<?php echo $_url_base ?>admin/projets/form_projet.php">Ajouter</a></button>
    </li>
</ul>

<?php 
include "../include/footer_admin.php" ?>
