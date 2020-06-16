<?php 
include "../config.php";

// on verifie que j'ai bien mes données envoyées.

//si une des variables $_POST (renseignées dans l'attribut name de l'input) est vide ou les deux, j'envoie un message sur la page connexion grâce à la fonction ajouterErreur et je renvoie l'internaute vers la page connexion.php grâce à la fonction changeDePage

if(empty($_POST["identifiant_admin"]) || empty($_POST["motdepasse_admin"])) {
    // ajouterErreur("Merci de vous connecter");
    header ("location: connexion.php?err=champvide");
    exit;
} else {

    // si les variables $_POST sont remplies, on vérifie leur existance dans la base de données
    //Etape 1 : on prépare un template de la requête. !!! Pour éviter les erreurs de syntaxe + sécuriser la requête SQL (éviter  "l'injection par SQL"), les valeurs sont remplacées par des étiquettes :mdp.   
    
    $query = $bdd -> prepare("SELECT * FROM users WHERE identifiant = :idUserStr AND motdepasse = :mdp");
    
    // Les étiquettes vont être remplacées par les valeurs contenues dans la bdd lors de l'exécution de la requête.
    $query -> execute(
        array(
            ":idUserStr" => $_POST["identifiant_admin"],
            ":mdp" => $_POST["motdepasse_admin"],
        )
    );
    // La réponse affiche toutes les "vrai(e)s" valeurs/enregistrements compris(es) dans identifiant et motdepasse (=colonnes de ma table)
    $resultatUser = $query -> fetch(PDO::FETCH_ASSOC);
    header ("location : accueil_admin.php");
    exit;

    // On vérifie que ces "vraies" valeurs existent dans notre bdd. Seul les users dont les identifiants figurent dans la table admin pourront accéder au compte administrateur.

    if(!empty($resultatUser)) { 
        // Si notre requête retourne un résultat, c'est qu'il y a un utilisateur avec cet identifiant et ce mot de passe.
        //Je précise la clé [0] dans $resultatUser[0] car je ne récupère qu'1 seul User (qu'une seule ligne)
        //J'autorise l'accès pour ce user et le redirige vers l'accueil du compte admin
        $_SESSION["connected_user"] = $resultatUser;
        header ("location : accueil_admin.php"); 
        exit;
    } else {
        // si je passe ici, c'est que je n'ai pas trouvé d'utilisateur avec les identifiants et le mdp renseigné dans le formulaire.
        // je ne peux pas le laisser se connecter et l'invite à recommencer.
        // ajouterErreur("L'utilisateur n'a pas été trouvé.");
        header("location : connexion.php?err=userinconnu");
        exit;
    }


}