<?php
// Quand on a cliqué sur le lien "supprimer" dans la liste des users.

include "../../config.php";

verif_connexion(); // on ne peut pas acceder à la page sans être connecté.

if(!isset($_GET["userdelete"])) { // on verifie que nous avons bien l'identifiant de notre menu à supprimer.
    header ("location:list_users.php?userdelete=vide");
} else {
    $leUser = unUser($_GET["userdelete"]);
    // on a l'identifiant embarqué dans $_GET, nous supprimons la techno
    $bdd -> query("DELETE FROM users WHERE id_admin = " . $_GET["userdelete"]);
    header ("location:list_users.php?userdelete=$leUser[nom]");
};
