<?php
// Quand on a cliqué sur le lien "supprimer" dans la liste des projets.

include "../../config.php";

verif_connexion(); // on ne peut pas acceder à la page sans être connecté.

if(!isset($_GET["projetdelete"])) { // on verifie que nous avons bien l'identifiant de notre projet à supprimer.
    header ("location:list_projets.php?projetdelete=vide");
} else {
    $leProjet = unProjet($_GET["projetdelete"]);
    // on a l'identifiant embarqué dans $_GET, nous supprimons le projet
    $bdd -> query("DELETE FROM projets WHERE id_projet = " . $_GET["projetdelete"]);
    header ("location:list_projets.php?projetdelete=$leProjet[titre]");
};
