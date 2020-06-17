<?php 
include "../../config.php";
include "../include/head_admin.php";

//requête pour la table techno
global $bdd;

    $query = $bdd -> query("SELECT * from techno");
    $val = $query -> fetchAll(PDO::FETCH_ASSOC);

?>


<h1>Gestion des technologies</h1>
<ul class="menu-admin">

<?php 

    foreach($val as $technologies => $techno){
?>
    <li>
    <h2><?php echo "$techno[nom]" ?><h2>
    <a href="<?php echo $_url_base . "admin/technos/form_techno.php"?>">Modifier</a>
    <a href="<?php echo $_url_base . "admin/technos/delete_techno.php"?>">Supprimer</a>
    </li>
<?php }; ?>
  
    <li>
    <button><a href="<?php echo $_url_base ?>admin/technos/form_techno.php">Ajouter</a></button>
   </li>
</ul>

<?php 
include "../include/footer_admin.php" 
?>
