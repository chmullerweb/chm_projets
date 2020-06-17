<?php 
include "../../config.php";
include "../include/head_admin.php"; 

// verifie si l'internaute a le droit de se connecter
verif_connexion();

//requête pour la table accueil
global $bdd;

    $query = $bdd -> query("SELECT * from accueil");
    $val = $query ->  fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Gestion de la page d'accueil</h1>
<form enctype="multipart/form-data" action="form_accueil_admin_resp.php" method="post">
<ul>
    <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie le $titre dans config et toutes les fois où cette variable est appelée -->
    <h2>Nom du profil</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <input type="text" name="nomprofil" value="<?php echo trim($val[0]["nomprofil"])?>">
  </li>
  <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie la phrase d'accroche -->
        <h2>Phrase d'accroche</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="claim" style="width:100%"> <?php echo trim($val[0]["claim"])?> </textarea>
  <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie la phrase d'introduction -->
    <h2>Phrase d'introduction</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="intro" style="width:100%"> <?php echo trim($val[0]["intro"])?> </textarea>
  </li>
  <li>
      
    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie la photo de profil -->
    <h2>Photo de profil</h2>

    <!-- MAX_FILE_SIZE précéde l'input de type file. Il dit la taille maximum du fichier que l'on peut envoyer -->
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

     <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template?>/img/photo_profil.jpg" alt="" style="width:4rem">
    <input name="photo_profil" type="file"  accept="image/jpeg" />  </li>
</ul>

<div class="flex" style="padding-top: 2rem">
<input type="submit" value="Envoyer" />
<button><a href="<?php echo $_url_base ?>admin/accueil_admin.php">Annuler</a></button>
</div>
</form>
<?php 
include "../include/footer_admin.php" ?>

