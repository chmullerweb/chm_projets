<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Gestion des technologies</h1>
<ul class="menu-admin">
  <li>
      <!-- Les titres H2 devront faire référence à la bdd -->
    <h2>HTML</h2>  
    <a href="<?php echo $_url_base ?>admin/projets/form_projet.php">Modifier</a>
    <a href="<?php echo $_url_base ?>admin/projets/delete_projet.php">Supprimer</a>
  </li>
  <li>
    <h2>CSS</h2>
    <a href="<?php echo $_url_base ?>admin/projets/form_projet.php">Modifier</a>
    <a href="<?php echo $_url_base ?>admin/projets/delete_projet.php">Supprimer</a>
  </li>
  <li>
</ul>

<?php 
include "../include/footer_admin.php" ?>