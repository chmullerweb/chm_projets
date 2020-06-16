<?php 
include "../config.php";
include "include/head_admin.php";

verif_connexion();
$user = $_SESSION["connected_user"];
?>

<h1>Bienvenue dans votre espace administration <?php echo $user["nom"] ?></h1>
<ul class="menu-admin">
  <li>
    <h2>Voir le site</h2>
    <i><a href="<?php echo $_url_base ?>index.php" class="go" target="_blank">🥨</a></i>
  </li>
  <li>
    <h2>Gestion Page d'accueil</h2>
    <i><a href="<?php echo $_url_base ?>admin/accueil/form_accueil_admin.php" class="go">🥨</a></i>
  </li>
  <li>
    <h2>Gestion Technologies</h2>
    <i><a href="<?php echo $_url_base ?>admin/technos/list_technos.php" class="go">🥨</a></i>
  </li>
  <li>
    <h2>Gestion Projets</h2>
    <i><a href="<?php echo $_url_base ?>admin/projets/list_projets.php" class="go">🥨</a></i>
  </li>
</ul>

<footer class="nav">
        <nav>          
            <ul class="flex">            
            <li class="white"><a href="<?php echo $_url_base?>admin/deconnexion.php">Se déconnecter</a></li>
            </ul>
        </nav>
</footer>

</body>
</html>



