<?php

include "../config.php";

// Je détruits la variable de connexion pour clore l'accès au compte admin.

unset($_SESSION["connected_user"]);

// si elle n'existe pas, l'internaute est redirigé vers la page de connexion.php avec un message de deconnexion dans l'url

header ("location:" . $_url_base . "/admin/connexion.php?deconnexion=true");
exit;