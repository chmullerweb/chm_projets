<?php include "include/head.php"?>

       
    <section class="title-projet">
            <h1><?php echo $projet_select["titre"]?></h1> 
    </section>
    
    <div class="description"> 
        <p><?php echo $projet_select["presentation"]?></p> 
    </div>
    
    <div class="year flex">
        <h2>Année de création :</h2>
        <p><?php echo $projet_select["annee"]?></p>
    </div>
    
    <div class="techno">
        <h2>Technologies utilisées :</h2>
           <ul> <!--select techno_id from projet, from techno, from projet_techno + FOREACH*/-->
            <li>CSS<li>
        </ul>
    </div>
    
    <div class="photo_principale">
        <img class="pix-projet-details-main" src="<?php echo $_dossier_template . $projet_select["img_main"]?>" alt="">
    </div>

    <div class="photo_1">
        <img class="pix-projet-details" src="<?php echo $_dossier_template . $projet_select["img1"]?>" alt="">
    </div>

    <div class="photo_2">
        <img class="pix-projet-details" src="<?php echo $_dossier_template . $projet_select["img2"]?>" alt="">
    </div>
    
    
    <?php include "include/footer.php"?>