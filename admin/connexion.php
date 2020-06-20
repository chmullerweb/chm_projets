<?php 
include "../config.php";
include "include/head_admin.php";
?>

<img src="../template/site2020/img/lock.png" alt="cadenas de connexion" class="lock">
<h1>Connexion au compte administrateur</h1>

<!-- Je crée un formulaire qui récupère les données saisies dans l'input et les vérifies dans connexion_resp.php pour vérifier si l'internaute à la droit ou non d'accéder au compte administrateur -->
<form method="post" action="connexion_resp.php">
<ul>
<li>
    <h2>Identifiant :</h2>
    <input name="identifiant_admin" title="Prénom du meilleur prof de PHP (minuscule)" type="text">
  </li>
  <li>
    <h2>Mot de passe :</h2>
    <input name="motdepasse_admin" title="ID de James Bond (int)" type="password">
  </li>
</ul>
<button type="submit">Valider</button>

</form>

<footer class="nav">
        <nav>          
            <ul class="flex">            
            <li class="white"><a href="<?php echo $_url_base?>index.php">Retour</a></li>
            </ul>
        </nav>
</footer>

</body>
</html>

