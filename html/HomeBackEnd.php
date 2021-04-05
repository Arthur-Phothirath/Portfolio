<?php
require_once '../tools/slugify.php';
require_once ("../tools/db.php");

$titlePage = "Projet Back End";
$prefixImage= "/Portfolio/image/";
$stylePage="style_projet.css";
$category = "back";



?>
<?php include "../inc/header.php" ?>

    <?php include "../inc/projectList.php" ?> 
       
        <!-- Footer -->
<?php include "../inc/footer.php" ?>