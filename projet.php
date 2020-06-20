<?php

include "config.php";

$projet_select = unProjet($_GET["projetselect"]);

//Dans ma page projet, j'affiche le contenu renseigné dans mon template projet_details.php
include $_dossier_template  . "projet_details.php";
