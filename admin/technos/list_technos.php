<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Gestion des technologies</h1>
<ul class="menu-admin">
  <li>
      <!-- Les titres H2 devront faire référence à la bdd -->
    <h2>HTML</h2>  
    <a href="<?php echo $_url_base ?>admin/technos/form_techno.php">Modifier</a>
    <a href="<?php echo $_url_base ?>admin/technos/delete_techno.php">Supprimer</a>
  </li>
  <li>
    <h2>CSS</h2>
    <a href="<?php echo $_url_base ?>admin/technos/form_techno.php">Modifier</a>
    <a href="<?php echo $_url_base ?>admin/technos/delete_techno.php">Supprimer</a>
  </li>
  <li>
  <button><a href="<?php echo $_url_base ?>admin/technos/form_techno.php">Ajouter</a></button>
    </li>
</ul>

<?php 
include "../include/footer_admin.php" ?>