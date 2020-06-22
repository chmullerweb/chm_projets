<?php
// Cette page reçoit les informations du formulaire qui se trouve sur form_techno.php

include "../../config.php";

verif_connexion(); // on ne peut pas accéder à la page sans être connecté.

if(!empty($_POST)) {
    // si le formulaire de technologie est vide ou s'il n'a pas d'id (id_techno == 0), alors j'ajoute la saisie à ma bdd
    if(empty($_POST["id_techno"]) || $_POST["id_techno"] == 0) {
        $query = $bdd -> prepare ("INSERT INTO technos (nomtechno) VALUES (:nom)");
        $query -> execute([
            ":nom" => $_POST["nomtechno"],
        ]);

        $technoID = $bdd -> lastInsertId(); // lastInsertId retourne l'identifiant de la dernière ligne insérée en base de données. Ici, c'est l'ID de la techno que nous venons d'ajouter dans la base. SQL va lui assigner un id puisque l'incrémentation se fait automatique. J'encapsule cette valeur dans une variable $technoID pour pouvoir la traiter plus tard si besoin
        header ("location:list_technos.php?newtechno=$_POST[nomtechno].$technoID");
        exit;

    } else {
        // un id connu de ma $bdd est envoyé, alors je modifie un enregistrement.
        $query = $bdd -> prepare ("UPDATE technos SET nomtechno = :nom WHERE id_techno = :idtechno");

        $query -> execute(
            [
                ":nom" => $_POST["nomtechno"],
                ":idtechno" => $_POST["id_techno"],
            ]
        );

        $technoID = $_POST["id_techno"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID de la techno à modifier dans la base.

        header ("location:list_technos.php?technoedit=$_POST[nomtechno].$technoID");
    }
}
