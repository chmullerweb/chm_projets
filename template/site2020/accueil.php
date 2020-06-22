<?php include "include/head.php";

    // on importe le contenu de la table accueil de ma bdd
    global $bdd;

    $query = $bdd -> prepare("SELECT * from accueil where iduu = :iduu");
    $query -> execute([":iduu" => "TEXT_ACCUEIL"]);
    $val = $query ->  fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["prenomNom"] = $val[0]["nomprofil"];
?>

<section class="header bg-sapin">
    <h1><?php echo $_SESSION["prenomNom"] ?></h1>
    <h2>Développeuse Web Fullstack</h2>
</section>
<div class="claim bg-bleu">
    <p><?php echo $val[0]["claim"] ?></p>
    <!--select quote from accueil*/-->
</div>
<div class="hello bg-violet">
    <h2>Hello</h2>
    <p><?php echo $val[0]["intro"] ?></p>
</div>
<div class="hobbies bg-vert">
    <h2>Mes autres passions :</h2>
    <ul>
        <li>Blogging Wordpress SEO pour Bijoux Robin Paris</li>
        <li>Bénévolat Maison Zéro Déchet</li>
        <li>Pratique et accueil en salle de sport Swedish Fit</li>
        <li>Lecture Bandes Dessinées</li>
        <li>Le Perrier menthe</li>
    </ul>
</div>
<div class="profil-pix-bloc">
    <img class="profil-pix" src="<?php echo $_dossier_template ?>img/photo_profil.jpg" alt="">
</div>
<div class="surprise bg-vert">
    <!--Faire un bouton : une autre citation et requête avec fetch random-->
    <button class="randomquote" title="🔨 en cours 🔨">Surprise !</button>
</div>

<?php include "include/footer.php"?>




