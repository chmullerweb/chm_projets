<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>

    <!--ICONES-->
    <script src="https://kit.fontawesome.com/39ca2ad730.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?php echo $_url_base . $_dossier_template ?>img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $_url_base . $_dossier_template ?>img/favicon.ico" type="image/x-icon">

    <!-- ////   CSS   //// -->
    <link rel="stylesheet" href="template/site2020/css/cssreset.css">
    <link rel="stylesheet" href="template/site2020/css/grid.css">
    <link rel="stylesheet" href="template/site2020/css/style.css">


    <!-- ////   PATTERN   //// -->
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">

    <!-- //// FONT ////-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kurale&display=swap" rel="stylesheet">
</head>


<body class="grid">

    <header class="nav">
        <nav>
            <ul class="flex">
                <?php include "nav.php" ?>
            </ul>
        </nav>
    </header>
