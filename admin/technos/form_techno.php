<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Editer la liste des technologies</h1>
<form enctype="multipart/form-data" action="form_accueil_admin_reponse.php" method="post">
<ul>
    <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie le nom de la techno -->
    <h2>Nom de la technologie</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
    <input type="text" name="nameTechno">
  </li>
</ul>

<div class="flex" style="padding-top: 2rem">
<input type="submit" value="Envoyer" />
<button type="button"><a href="<?php echo $_url_base ?>admin/accueil_admin.php">Annuler</a></button>
</div>
</form>

<?php 
include "../include/footer_admin.php" ?>