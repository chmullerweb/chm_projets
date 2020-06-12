<?php include "include/head.php"?>
 
    
<div class="title">
    <h1>Vous souhaitez me contacter ?</h1>
</div>

    <figure class="bloc-contact phone">
        <img class="contact-pix" src="<?php echo $_dossier_template ?>img/phone.png" alt="">
        <figcaption class="figcaption-contact">
            <h3>Appelez-moi</h3>
            <p><a href="tel:0669116750">06 69 11 67 50</a></p>  <!--créer dans la bdd, l'enregistrement -->
        </figcaption>
    </figure>
    <figure class="bloc-contact mail" style="margin:0">
    <img class="contact-pix" src="<?php echo $_dossier_template ?>img/mail.png" alt="">
        <figcaption class="figcaption-contact">
            <h3>Ecrivez-moi</h3>
            <p><a href="mailto:ch_muller@outlook.fr">ch_muller@outlook.fr</a></p>  <!--lister à la suite avec du php -->
        </figcaption>
    </figure>
    <figure class="bloc-contact networks" style="margin:0">
    <img class="contact-pix" src="<?php echo $_dossier_template ?>img/contacts.png" alt="">
        <figcaption class="figcaption-contact">
            <h3>Restons en contact</h3>
            <div class="git flex">
                <p>Github</p>
               <img class="pix-networks" src="template/site2020/img/github.png" alt="">
            </div>
            <div class="linkedin flex">
                <p>LinkedIn</p>
               <img class="pix-networks" src="template/site2020/img/linkedin.png" alt="">
            </div>
        </figcaption>
    </figure>

   
<section class="footer-contact">>
<?php include "include/footer.php"?>
</section>