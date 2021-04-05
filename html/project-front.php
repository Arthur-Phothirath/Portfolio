<?php
require_once ("../tools/db.php");

$titlePage = "Projet Front End";
$prefixImage= "/Portfolio/image/";
$stylePage="style_projet.css";
if(empty($_GET["id"])){
    die("Pas d'id");
}
$project = query("SELECT * FROM projects WHERE id=:id", [
    "id" => $_GET["id"],
])->fetch();
if(empty($project)){
    die("Pas d'id associé au projet.");
}
// extract($project);

// dd($project);


?>
<?php include "../inc/header.php" ?>

        <div class="headerfantom"></div>
        
        <div id="scroll_to_top">
            <a class="hvr-sweep-to-top" href="#top">&#11014;</a>
        </div>
        <!--Main-->
        <div class="main_back">
            <div id="scroll_to_top">
                <a href="#top">&#11014;</a>
            </div>
            <!-- Bannière -->
            <div class="banniere">
                <!-- imgbannnière -->
            </div>
            <!--Card Introduction-->

            <div class="intro" id="partie1">
                <div class="slide_intro">
                    <h1>Introduction</h1>
                </div>
                <div class="card intro_card">
                    <div class="sub_intro">
                        <div class="introduction">
                            <p><?php echo $project['introduction']; ?></p>                     
                            <nav>   
                                <a href="#" class="button hvr-push">Accès au code</a>
                            </nav>
                        </div>   
                    </div>
                </div>
            </div>

            <!--Card Conception-->
            
            <div class="conception">
                <div class="slide_comp">
                    <h1>La conception</h1>
                </div>    
                <!-- Intérieur card -->
                <div class="card conception_card">
                    <div class="sub_conception">
                       <?php echo $project['conception']; ?>
                    </div>
                </div>
            </div>

            <!--Card Réalisation-->
            <div class="realisation">
                <div class="slide_comp">
                    <h1>La réalisation</h1>
                </div>    
                <!-- Intérieur card -->
                <div class="card realisation_card">
                    <div class="sub_realisation">
                        <div>
                            <h4>HTML et CSS</h4>
                        </div>
                        <p> <?php echo $project["realization"]; ?> </p>
                        <div>
                            <img src="../image/html.jpg" alt="" class="">
                            <img src="../image/html.jpg" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
<?php include ("../inc/footer.php"); ?>