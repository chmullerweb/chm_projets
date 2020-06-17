<?php
// Quand on a cliqué sur le lien "supprimer" dans la liste des menus.

include "../../config.php";

verif_connexion(); // on ne peut pas acceder à la page sans être connecté.

if(!isset($_GET["technodelete"])) { // on verifie que nous avons bien l'identifiant de notre menu à supprimer.
    header ("location:list_technos.php?technodelete=vide");
} else {
    $laTechno = uneTechno($_GET["technodelete"]);
    // on a l'identifiant embarqué dans $_GET, nous supprimons la techno
    $bdd -> query("DELETE FROM technos WHERE id_techno = " . $_GET["technodelete"]);
    header ("location:list_technos.php?technodelete=$laTechno[nom]");
};

