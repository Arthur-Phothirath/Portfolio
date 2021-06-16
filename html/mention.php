<?php
require_once ("../tools/db.php");
$titlePage = "Mention légal";
$prefixImage= "/image/";
$stylePage="style_about.css";
?>


<?php include '../inc/header.php' ?>

<section class="section-legacy">
            <div class="grid-legacy">
                <h2 class="grid-legacy-title">Mentions Légales</h2>
        
                <div class="element-grid-legacy">
                    <h3 class="element-grid-legacy-title">Information éditeur</h3>
                    <p>Nom : PHO</p>
                    <p>Prénom : Arthur</p>
                    <p>Adresse : 6 rue Didot, 75018 Paris</p>
                    <p>Téléphone : +33 6 XX XX XX</p>
                    <p>Email : a_phothirath@factory.fr</p>
                </div>
        
                <div class="element-grid-legacy">
                    <h3 class="element-grid-legacy-title">Information site et hébergement</h3>
                    <p>Site : <a href="https://www.ovh.com">ovh.com</a></p>
                    <p>Hébergeur : OVH</p>
                    <p>Adresse : 2, rue Kellermann, 59100 Roubaix</p>
                    <p>Site de l'hébergeur : <a href="https://www.ovh.com">ovh.com</a></p>
                </div>
        
                <div class="element-grid-legacy">
                    <h3 class="element-grid-legacy-title">Développeur</h3>
                    <p>Développeur du site : PHO Arthur</p>
                    <p>Adresse : 20 rue de magenta 75018 Paris</p>
                    <p>Site du développeur : <a href="../index.html">portfolio.fr</a></p>
                </div>
            </div>
        </section>
    </div>

<?php include "../inc/footer.php" ?>