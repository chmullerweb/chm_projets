<?php

include "../../config.php";

verif_connexion();


// Je vérifie le texte 

global $bdd;
    // permet de récupérer la variable $bdd, même si celle-ci est à l'extérieur de ma fonction
    // dans cette variable, il y a le connexion à la base de données, nous pouvons donc
    // l'utilise dans notre fonction.

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

 
        #Si les données textes sont envoyées via $_POST, pour des fichiers, on utilise $_FILES
        
        #Je vérifie que la variable $_FILE existe et que le fichier remis ne génère pas d'erreur
        if(!empty($_FILES["photo_profil"]) && $_FILES["photo_profil"]["error"] == 0){
            
        #Pour que la photo donnée par l'utilisateur s'ajoute à mon dossier template/img, je dois crée un chemin de destination 
            
            #Je commence en précisant le nom du dossier dans lequelle la photo doit se ranger, entré dans une variable $nom_dossier_destination
            $nom_dossier_destination = "template\site2020\img";
            
            #Je lui indique de se diriger vers le dossier cité plus haut lors de l'enregistrement (dossier qui est enregistré en dur sur mon disque dur)
            $chemin_dossier_destination = __DIR__ . "/../../" . $nom_dossier_destination;
            
            #Je paramètre le chemin pour accéder à ce fichier et je précise comment le nommer. 
                //Ici on prend par défaut, le nom de la photo
            /*$chemin_fichier_destination = $chemin_dossier_destination . "/" . $_FILES["photo_musee"]["name"];*/
                // Ici je nomme précisément ma photo pour pouvoir plus facilement l'appeler plus tard en HTML
            $chemin_fichier_destination = $chemin_dossier_destination .  "/" . "photo_profil.jpg";
            
            
            #Le chemin étant crée, il faut que j'indique au serveur de bien envoyer l'image vers ce chemin de destination via la fonction move_uploaded_file($_FILES["valeur_attribut_name"]["tmp_name"], $chemin_fichier_destination). Ici la variable permet de renommer le fichier. On ne va pas enregistré le fichier sous "tmp_name" mais sous son "name".
            
            move_uploaded_file($_FILES["photo_profil"]["tmp_name"], $chemin_fichier_destination);
            
        }

        
        //var_dump($_FILES);
        //var_dump($chemin_fichier_destination);
        //var_dump($resultNbVal); 
    
        header("location:../accueil_admin.php");

            // if($_FILES["imageAccueil"]["error"] == UPLOAD_ERR_OK || $_FILES["imageAccueil"]["error"] == UPLOAD_ERR_NO_FILE) {
            // // nous utilisons ici des constantes fournies par PHP. Nous pourrions utiliser les chiffres correspondants
            // // mais nous utilisons plutôt ces constantes qui ont un nom qui est plus compréhensible
            // // voir : https://www.php.net/manual/fr/features.file-upload.errors.php


            // if($_FILES["imageAccueil"]["error"] == UPLOAD_ERR_OK) {
            //     // un fichier a été envoyé correctement, nous devons le traiter
            //     //
            //     // 1 - nous verrifions que le chemin de destination existe, sinon nous le créons.

            //     verifierCheminFichier($destination);

            //     move_uploaded_file($_FILES["imageAccueil"]["tmp_name"], RESTO_PATH_SITE . $destination);
