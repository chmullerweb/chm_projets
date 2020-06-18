<?php 
include "../../config.php";
include "../include/head_admin.php";

if(!empty($_GET["projetedit"])) {
  // si j'ai un paramètre d'URL, c'est que je peux éditer le projet et récupérer ses enregistrements
  $projetedit = $bdd -> query("SELECT * from projets where id_projet = " . $_GET["projetedit"]) -> fetch();
  // sinon le projet est nouveau et les input sont vides
} else {
  $projetedit = [];
  $projetedit["titre"] = "";
  $projetedit["presentation"] = ""; 
  $projetedit["lien"] = "";
  $projetedit["annee"] = "";
  $projetedit["ordre"] = "";
 
}

?>

<h1>Editer la liste des projets</h1>
<form enctype="multipart/form-data" action="form_projet_resp.php" method="post">
<ul>
    <li>

    <!-- <input type="checkbox" checked>
    <i></i> -->

    <h2>Nom du projet</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
    <input type="text" name="titre" value="<?php echo $projetedit["titre"] ?>">
    <input type="hidden" name="id_projet" value="<?php echo $projetedit["id_projet"] ?>">
  </li>
  
  <li>
    <!-- <input type="checkbox" checked>
    <i></i> -->

        <!-- Modifie la presentation du projet -->
        <h2>Description</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="presentation" style="width:100%"> <?php echo $projetedit["presentation"] ?> </textarea>
  </li>

  <li>
      <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie l'année de création du projet -->
    <h2>Année de création</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <input name="annee" value="<?php echo $projetedit["annee"] ?>">
  </li>

  <li>
  <h2>Voir le site</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <input name="lien" value="<?php echo $projetedit["lien"] ?>" style="width:100%">
  </li>

  <li>
      
    <!-- <input type="checkbox" checked>
    <i></i> -->

    <!-- Modifie les photos du projet -->
    <h2>Photo principale</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template . $projetedit["img_main"]?>" alt="" style="width:4rem">
    <input name="img_main" type="file"  accept="image/jpeg" />
  </li>
  <li>
  <h2>Photo numéro 2</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template . $projetedit["img1"]?>" alt="" style="width:4rem">
    <input name="img1" type="file"  accept="image/jpeg" />
  </li>
  <li>
  <h2>Photo numéro 3</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <img src="<?php echo $_url_base . $_dossier_template . $projetedit["img2"]?>" alt="" style="width:4rem">
    <input name="img2" type="file"  accept="image/jpeg" />
  </li>

  <li>
    <!-- Modifie l'ordre du projet -->
    <h2>Ordre</h2>
            <!-- Récupère le numéro qui est affiché actuellement -->
    <input name="ordre" value="<?php echo $projetedit["ordre"] ?>">
  </li>
  
</ul>

<div class="flex" style="padding-top: 2rem">
<button type="submit">Envoyer</button>
<button type="button"><a href="<?php echo $_url_base ?>admin/list_projets.php">Annuler</a></button>
</div>
</form>
<?php 
include "../include/footer_admin.php"; ?>