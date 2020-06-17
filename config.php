<?php

//J'ouvre "l'enregistrement" de la session
session_start();

//Je prépare la connexion à mon serveur et à ma base de données dans phpmyadmin
$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$nomBaseDeDonnees = "monbook_charlotte";


//On établit la connexion en PDO
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


/// Je déclare mes variables et constantes 

$title = $_SESSION["prenomNom"];   //Attention la valeur de title doit être récupérée à partir du formulaire
$titleAdmin = "Administration - monBook";

$_dossier_template = "template/site2020/"; // repertoire dans lequel j'ai mis l'ensemble des gabarits de mon site

$_url_base = "http://localhost/coursphp/chm_projets/";
//  c'est l'url pour accéder à la page d'accueil de mon site.


//ici je crée une fonction qui permet de vérifier si l'utilisateur à le droit de se connecter à l'administration. Dans ce cas, la fonction dit : si la $_SESSION("droit_connexion") est vide alors l'internaute est redirigé vers la page connexion_admin

function verif_connexion(){
    if(empty($_SESSION["connected_user"])){
        header("location:connexion.php");
    } 
};

//ici je crée une fonction qui récupère l'id de la techno 
function uneTechno ($idTechno) {
    // retourne toutes les informations de la techno qui a comme identifiant $idTechno

    global $bdd;

    #on prépare la requête en lui donnant une étiquette :idTechno
    $query = $bdd -> prepare("select * from techno where id_techno = :idTechno");
    
    #on éxécute la requête
    $query -> execute([":idTechno" => $idTechno]);
    
    return $query -> fetch(PDO::FETCH_ASSOC); // on utilise fetch et non fetchAll car nous souhaitons retourner un seul résultat.

};


// je crée une fonction pour récupérer les données de mes tables de ma bdd
function MontrerValeur($table, $colonne) {

    global $bdd;

    $query = $bdd -> prepare("SELECT * from $table where $colonne = :colonne");
    $query -> execute([":colonne" => $colonne]);
    $val = $query ->  fetchAll(PDO::FETCH_ASSOC);

    if(isset($val[$colonne])) {
        return $val[$colonne];
    }
}


