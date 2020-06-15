<?php 
include "../config.php";
include "include/head_admin.php" ?>

<h1>Bienvenue dans votre espace administration "login"</h1>
<ul class="menu-admin">
  <li>
    <h2>Voir le site</h2>
    <i><a href="<?php echo $_url_base ?>index.php" class="go">🥨</a></i>
  </li>
  <li>
    <h2>Gestion Page d'accueil</h2>
    <i><a href="<?php echo $_url_base ?>accueil/form_accueil_admin.php" class="go">🥨</a></i>
  </li>
  <li>
    <h2>Gestion Technologies</h2>
    <i><a href="<?php echo $_url_base ?>technos/table_technos.php" class="go">🥨</a></i>
  </li>
  <li>
    <h2>Gestion Projets</h2>
    <i><a href="<?php echo $_url_base ?>projets/table_projets.php" class="go">🥨</a></i>
  </li>
</ul>

<?php 
include "include/footer_admin.php" ?>

