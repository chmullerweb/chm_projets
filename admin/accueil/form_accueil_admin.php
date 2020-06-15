<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Gestion de la page d'accueil</h1>
<form enctype="multipart/form-data" action="form_accueil_admin_reponse.php" method="post">
<ul>
    <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie le $titre dans config et toutes les fois où cette variable est appelée -->
    <h2>Nom du profil</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <input type="text" name="nameProfil">
  </li>
  <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie la phrase d'accroche -->
        <h2>Phrase d'accroche</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="claim"> ... </textarea>
  <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie la phrase d'introduction -->
    <h2>Phrase d'introduction</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="intro"> ... </textarea>
  </li>
  <li>
      
    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie la phrase d'introduction -->
    <h2>Photo de profil</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template?>/img/Charlotte_resize.jpg" alt="" style="width:4rem">
    <input name="imageAccueil" type="file"  accept="image/jpeg" />  </li>
</ul>

<div class="flex" style="padding-top: 2rem">
<input type="submit" value="Envoyer" />
<button><a href="<?php echo $_url_base ?>admin/accueil_admin.php">Annuler</a></button>
</div>
</form>
<?php 
include "../include/footer_admin.php" ?>

