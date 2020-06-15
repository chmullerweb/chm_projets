<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Gestion des projets</h1>
<ul class="menu-admin">
  <li>
      <!-- Les titres H2 devront faire référence à la bdd -->
    <h2>Codevores</h2>  
    <a href="<?php echo $_url_base ?>admin/projets/form_projet.php">Modifier</a>
    <a href="<?php echo $_url_base ?>admin/projets/delete_projet.php">Supprimer</a>
  </li>
  <li>
    <h2>Museum</h2>
    <a href="<?php echo $_url_base ?>admin/projets/form_projet.php">Modifier</a>
    <a href="<?php echo $_url_base ?>admin/projets/delete_projet.php">Supprimer</a>
  </li>
  <li>
</ul>

<?php 
include "../include/footer_admin.php" ?>