<?php 
include "../../config.php";
include "../include/head_admin.php"; 

if(!empty($_GET["useredit"])) {
  // si j'ai un paramètre d'URL, c'est que je peux éditer la techno
  // un enregistrement déjà existant.
  $useredit = $bdd -> query("SELECT * from users where id_admin = " . $_GET["useredit"]) -> fetch();
} else {
  $useredit = [];
  $useredit["nom"] = "";
  $useredit["identifiant"] = "";
  $useredit["motdepasse"] = "";
}

?>

<h1>Editer la liste des administrateurs</h1>
<form enctype="multipart/form-data" action="form_users_resp.php" method="post">
    <ul>
        <li>
            <!-- Encapsule l'id de l'administrateur -->
            <input type="hidden" name="id_admin" value="<?php echo "$useredit[id_admin]" ?>">
            <!-- Modifie le nom de l'utilisateur -->
            <h2>Nom de l'utilisateur</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
            <input type="text" name="nom" value="<?php echo "$useredit[nom]" ?>">
        </li>
        <li>
            <!-- Modifie l'identifiant de l'administrateur -->
            <h2>Identifiant de connexion</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
            <input type="text" name="identifiant" value="<?php echo "$useredit[identifiant]" ?>">
        </li>
        <li>
            <!-- Modifie le motdepasse de l'administrateur -->
            <h2>Mot de passe de connexion</h2>
            <!-- Récupère le texte qui est affiché actuellement s'il existe -->
            <input type="text" name="motdepasse" value="<?php echo "$useredit[motdepasse]" ?>">
        </li>
    </ul>

    <div class="flex" style="padding-top: 2rem">
        <input type="submit" value="Envoyer" />
        <button type="button"><a href="<?php echo $_url_base ?>admin/users/list_users.php">Annuler</a></button>
    </div>
</form>

<?php 
include "../include/footer_admin.php" ?>
