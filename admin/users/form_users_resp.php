<?php
// Cette page reçoit les informations du formulaire qui se trouve sur form_users.php

include "../../config.php";

verif_connexion(); // on ne peut pas accéder à la page sans être connecté.

if(!empty($_POST)) {
    //
    // si le formulaire de administrateur n'est pas vide et s'il n'a pas d'id (id_admin == 0), alors j'ajoute la saisie à ma bdd
    //

    if(empty($_POST["id_admin"]) || $_POST["id_admin"] == 0) {
        // je n'envoie pas d'ID donc je peux ajouter une nouvelle techno

        $query = $bdd -> prepare ("INSERT INTO users (nom, identifiant, motdepasse) VALUES (:nom, :identifiant, :motdepasse)");

        $query -> execute([
            ":nom" => $_POST["nom"],
            ":identifiant" => $_POST["identifiant"],
            ":motdepasse" => $_POST["motdepasse"],
        ]);

        $userID = $bdd -> lastInsertId(); // lastInsertId retourne l'identifiant de la dernière ligne insérée en base de données. Ici, c'est l'ID du user que nous venons d'ajouter dans la base. SQL va lui assigner un id puisque l'incrémentation se fait automatique. J'encapsule cette valeur dans une variable $userID pour pouvoir la traiter plus tard si besoin
            header ("location:list_users.php?newuser=$_POST[nom].$userID");
            exit;

    } else {
        // un id connu de ma $bdd est envoyé, alors je modifie un enregistrement.
        $query = $bdd -> prepare ("UPDATE users SET nom = :nom, identifiant = :identifiant, motdepasse = :motdepasse  WHERE id_admin = :idadmin");

        $query -> execute(
            [
                ":nom" => $_POST["nom"],
                ":identifiant" => $_POST["identifiant"],
                ":motdepasse" => $_POST["motdepasse"],
                ":idadmin" => $_POST["id_admin"],
            ]
        );

        $userID = $_POST["id_admin"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du user à modifier dans la base.

        header ("location:list_users.php?useredit=$_POST[nom].$userID");
    }
}
