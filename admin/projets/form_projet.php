<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Modification de la liste des projets</h1>
<form enctype="multipart/form-data" action="form_accueil_admin_reponse.php" method="post">
<ul>
    <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

    <h2>Nom du projet</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
    <input type="text" name="nameProfil">
  </li>
  <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie la description du projet -->
        <h2>Description</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="description"> ... </textarea>
  <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie l'année de création du projet -->
    <h2>Année de création</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <input name="createDate"> ... </textarea>
  </li>
  <li>
      
    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie les photos du projet -->
    <h2>Photo principale</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template?>/img/Charlotte_resize.jpg" alt="" style="width:4rem">
    <input name="imageAccueil" type="file"  accept="image/jpeg" />
  </li>
  <h2>Photo numéro 2</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template?>/img/Charlotte_resize.jpg" alt="" style="width:4rem">
    <input name="imageAccueil" type="file"  accept="image/jpeg" />
  </li>
  <h2>Photo numéro 3</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template?>/img/Charlotte_resize.jpg" alt="" style="width:4rem">
    <input name="imageAccueil" type="file"  accept="image/jpeg" />
  </li>
  <h2>Photo numéro 4</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template?>/img/Charlotte_resize.jpg" alt="" style="width:4rem">
    <input name="imageAccueil" type="file"  accept="image/jpeg" />
  </li>
</ul>

<div class="flex" style="padding-top: 2rem">
<input type="submit" value="Envoyer" />
<button><a href="<?php echo $_url_base ?>admin/accueil_admin.php">Annuler</a></button>
</div>
</form>
<?php 
include "../include/footer_admin.php" ?>