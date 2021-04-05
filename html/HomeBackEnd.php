<?php
require_once ("../tools/db.php");

$titlePage = "Projet Back End";
$prefixImage= "/Portfolio/image/";
$stylePage="style_projet.css";
$category = "back";

$projectList = query("SELECT id, name, imageHome, projectDate, technologies FROM projects WHERE category= :category", ["category" => $category])->fetchAll();


?>
<?php include "../inc/header.php" ?>

    <?php include "../inc/projectList.php" ?> 
       
        <!-- Footer -->
<?php include "../inc/footer.php" ?>