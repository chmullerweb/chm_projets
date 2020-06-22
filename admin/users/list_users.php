<?php 
include "../../config.php";
include "../include/head_admin.php";

//requête pour la table users
global $bdd;

    $query = $bdd -> query("SELECT * from users");
    $list_user_admin = $query -> fetchAll(PDO::FETCH_ASSOC);
 ?>

<h1>Gestion des adminstrateurs</h1>
<ul class="menu-admin">

    <?php 
    //Affichage des users depuis la base de donnée
    foreach($list_user_admin as $key => $user){
    ?>
    <li>
        <h2><?php echo $user["nom"] ?></h2>
                <a href="<?php echo $_url_base . "admin/users/form_users.php?useredit=$user[id_admin]"?>">Modifier</a>
                <a <?php echo "onclick=\" return confirm('Voulez-vous effacer cet administrateur ?')\"" ?> href="<?php echo $_url_base . "admin/users/delete_users.php?userdelete=$user[id_admin]"?>">Supprimer</a>
    </li>
    <?php }; ?>
    <li>
        <button><a href="<?php echo $_url_base ?>admin/users/form_users.php">Ajouter</a></button>
    </li>
</ul>

<?php 
include "../include/footer_admin.php"; 
?>
