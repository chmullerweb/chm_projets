<?php include "include/head.php";

// on importe le contenu de la table reseaux de ma bdd

global $bdd;

$query = $bdd -> prepare("SELECT * from reseaux where iduu = :iduu");
$query -> execute([":iduu" => "TEXT_RESEAU"]);
$valreseau = $query ->  fetchAll(PDO::FETCH_ASSOC);

?>
?>
 
    
<div class="title">
    <h1>Vous souhaitez me contacter ?</h1>
</div>

    <figure class="bloc-contact phone">
        <img class="contact-pix" src="<?php echo $_dossier_template ?>img/phone.png" alt="">
        <figcaption class="figcaption-contact">
            <h2>Appelez-moi</h3>
            <p><a href="<?php echo "tel:" . $valreseau[2]["lien"]?>"><?php echo $valreseau[2]["lien"]?></a></p>  <!--créer dans la bdd, l'enregistrement -->
        </figcaption>
    </figure>
    <figure class="bloc-contact mail">
    <img class="contact-pix" src="<?php echo $_dossier_template ?>img/mail.png" alt="">
        <figcaption class="figcaption-contact">
            <h2>Ecrivez-moi</h3>
            <p><a href="<?php echo "mailto:" . $valreseau[3]["lien"]?>"><?php echo $valreseau[3]["lien"]?></a></p>  <!--lister à la suite avec du php -->
        </figcaption>
    </figure>
    <figure class="bloc-contact networks">
    <img class="contact-pix" src="<?php echo $_dossier_template ?>img/contacts.png" alt="">
        <figcaption class="figcaption-contact">
            <h2>Restons en contact</h3>
            <div class="git flex">
                <p>Github</p>
               <a href="<?php echo $valreseau[1]["lien"]?>">
               <img class="pix-networks" src="template/site2020/img/github.png" alt="">
               </a>
            </div>
            <div class="linkedin flex">
                <p>LinkedIn</p>
                <a href="<?php echo $valreseau[0]["lien"]?>">
               <img class="pix-networks" src="template/site2020/img/linkedin.png" alt="">
               </a>
            </div>
        </figcaption>
    </figure>

   
<?php include "include/footer.php"?>
