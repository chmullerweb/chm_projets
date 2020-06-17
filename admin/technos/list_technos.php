<?php 
include "../../config.php";
include "../include/head_admin.php";

//requête pour la table techno
global $bdd;

    $query = $bdd -> query("SELECT * from technos");
    $val = $query -> fetchAll(PDO::FETCH_ASSOC);
  ?>


<h1>Gestion des technologies</h1>
<ul class="menu-admin">

<?php 
//Affichage des technologies depuis la base de donnée

    foreach($val as $technologies => $techno){
?>
    <li>
    <h2><?php echo $techno["nomtechno"] ?><h2>
    <a href="<?php echo $_url_base . "admin/technos/form_techno.php?technoedit=$techno[id_techno]"?>">Modifier</a>
    <a href="<?php echo $_url_base . "admin/technos/delete_techno.php?technodelete=$techno[id_techno]"?>">Supprimer</a>
    </li>
<?php }; ?>
  
    <li>
    <button><a href="<?php echo $_url_base ?>admin/technos/form_techno.php">Ajouter</a></button>
   </li>
</ul>

<?php 
include "../include/footer_admin.php" 

?>
