<?php 
include "../../config.php";
include "../include/head_admin.php" ?>

<h1>Gestion de la page d'accueil</h1>
<ul>
    <li>
    <input type="checkbox" checked>
    <i></i>
        <!-- Modifie le $titre dans config et toutes les fois où cette variable est appelée -->
    <h2>Nom du profil</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <input type="text" name="nameProfil">
  </li>
  <li>
    <input type="checkbox" checked>
    <i></i>
        <!-- Modifie la phrase d'accroche -->
        <h2>Phrase d'accroche</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="claim"> ... </textarea>
  <li>
    <input type="checkbox" checked>
    <i></i>
    <!-- Modifie la phrase d'introduction -->
    <h2>Phrase d'introduction</h2>
            <!-- Récupère le texte qui est affiché actuellement -->
    <textarea name="intro"> ... </textarea>
  </li>
  <li>
    <input type="checkbox" checked>
    <i></i>
    <!-- Modifie la phrase d'introduction -->
    <h2>Photo de profil</h2>
            <!-- Récupère l'image qui est en ligne actuellement -->
    <input name="imageAccueil" type="file"  accept="image/jpeg" />  </li>
</ul>
<?php 
include "../include/footer_admin.php" ?>

