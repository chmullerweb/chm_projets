<?php

include "../../config.php";

verif_connexion();


// Je vérifie le texte 

global $bdd;
    // global récupère la variable $bdd menant à la connexion à la base de données

    // 1 - on verifie si la donnée existe déjà dans la table.
    $nbVal = $bdd -> prepare("SELECT * from accueil where iduu = :iduu");
    $nbVal -> execute([":iduu" => "TEXT_ACCUEIL"]);
    $resultNbVal =  $nbVal -> fetchAll(PDO::FETCH_ASSOC);

    if($resultNbVal == 0) {
        // nous n'avons pas d'enregistrement, nous devons l'insérer dans la base.
        $query = $bdd -> query("INSERT into accueil(nomprofil, claim, intro) VALUES (trim($_POST[nomprofil]),trim($_POST[claim]),trim($_POST[intro]))");

    } else {
        // l'enregistrement existe, nous devons le mettre à jour.
        $query = $bdd -> prepare("UPDATE accueil SET nomprofil=:nomprofil, claim=:claim, intro=:intro WHERE iduu = :iduu");
        $query -> execute([
            ":iduu" => "TEXT_ACCUEIL",
            ":nomprofil" => trim($_POST["nomprofil"]),
            ":claim" => trim($_POST["claim"]),
            ":intro" => trim($_POST["intro"]),            
        ]);
    }



// Je vérifie le fichier de photos 

        #Je vérifie que la variable $_FILE existe et que le fichier remis ne génère pas d'erreur
        if(!empty($_FILES["photo_profil"]) && $_FILES["photo_profil"]["error"] == 0){
            
        #Pour que la photo donnée par l'utilisateur s'ajoute à mon dossier template/img, je dois crée un chemin de destination 
            
            #Je commence en précisant le nom du dossier dans lequel la photo doit se ranger, entré dans une variable $nom_dossier_destination
            $nom_dossier_destination = "template\site2020\img";
            
            #Je lui indique de se diriger vers le dossier cité plus haut lors de l'enregistrement (dossier qui est enregistré en dur sur mon disque dur)
            $chemin_dossier_destination = __DIR__ . "/../../" . $nom_dossier_destination;
            
            #Je paramètre le chemin pour accéder à ce fichier et je précise comment le nommer. 
            $chemin_fichier_destination = $chemin_dossier_destination .  "/" . "photo_profil.jpg";
           
            #Le chemin étant crée, il faut que j'indique au serveur de bien envoyer l'image vers ce chemin de destination et de l'enregistrer non pas sous "tmp_name" mais sous son "name".
            move_uploaded_file($_FILES["photo_profil"]["tmp_name"], $chemin_fichier_destination);  
        }

    
        header("location:../accueil_admin.php");

