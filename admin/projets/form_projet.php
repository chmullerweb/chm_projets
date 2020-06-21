<?php 
include "../../config.php";
include "../include/head_admin.php";

// on importe le contenu de la table technos de ma bdd

global $bdd;

$query = $bdd -> prepare("SELECT * from technos where iduu = :iduu");
$query -> execute([":iduu" => "TEXT_TECHNO"]);
$list_techno = $query ->  fetchAll(PDO::FETCH_ASSOC);

// je vérifie plusieurs conditions pour savoir si le formulaire va rentrer un nouvel enregistrement ou l'éditer

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
  $projetedit["online"] = "";
 
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

  <li>
  <h2>Les technos utilisées</h2>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!   A FAIRE Coche les technos utilisées actuellement : si techno_id et projet_id existe alors input checked. Dans le for_resp récupérer le techno_id et l'insérer dans la join table-->
            <div class="techno-list">
        <?php foreach($list_techno as $key => $techno){ ?>
            <div class="flex">
            <input type="checkbox" id="<?php echo $techno["nomtechno"]?>" name="<?php echo $techno["nomtechno"]?>" class="input-search" value="<?php $techno["id_techno"]?>">
                <label for="<?php echo $techno["nomtechno"]?>"><?php echo $techno["nomtechno"]?></label>
            </div>
<?php }; ?>
  </li>

  <li>
      
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

  <li>
    <!-- Modifie la mise en ligne du projet -->
    <h2>Projet en ligne : </h2>
            <!-- Récupère le numéro qui est affiché actuellement -->
    <?php    
     if($projetedit["visible"] === "0" || empty($projetedit["visible"])){?>
    <label for="online-oui">Oui</label>
    <input id="online-oui" type="radio" name="visible" value="1">
    <label for="online-non">Non</label>
    <input id="online-non" type="radio" name="visible" value="0" checked>
    <?php } else if($projetedit["visible"] === "1"){?>
    <label for="online-oui">Oui</label>
    <input id="online-oui" type="radio" name="visible" value="1" checked>
    <label for="online-non">Non</label>
    <input id="online-non" type="radio" name="visible" value="0">
    <?php }; ?>
  </li>
  
</ul>

<div class="flex" style="padding-top: 2rem">
<button type="submit">Envoyer</button>
<button type="button"><a href="<?php echo $_url_base ?>admin/projets/list_projets.php">Annuler</a></button>
</div>
</form>
<?php 
include "../include/footer_admin.php"; ?>