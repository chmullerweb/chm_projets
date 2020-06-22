<?php 
include "../../config.php";
include "../include/head_admin.php"; 

if(!empty($_GET["technoedit"])) {
  // si j'ai un paramètre d'URL, c'est que je peux éditer la techno
  $technoedit = $bdd -> query("SELECT * from technos where id_techno = " . $_GET["technoedit"]) -> fetch();
} else {
  $technoedit = [];
  $technoedit["nomtechno"] = "";
}
?>

<h1>Editer la liste des technologies</h1>
<form enctype="multipart/form-data" action="form_techno_resp.php" method="post">
    <ul>
        <li>
            <!-- Modifie le nom de la techno -->
            <h2>Nom de la technologie</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
            <input type="text" name="nomtechno" value="<?php echo "$technoedit[nomtechno]" ?>">
            <input type="hidden" name="id_techno" value="<?php echo "$technoedit[id_techno]" ?>">
        </li>
    </ul>
    <div class="flex" style="padding-top: 2rem">
        <input type="submit" value="Envoyer" />
        <button type="button"><a href="<?php echo $_url_base ?>admin/technos/list_technos.php">Annuler</a></button>
    </div>
</form>

<?php include "../include/footer_admin.php" ?>
