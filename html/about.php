<?php
require_once ("../tools/db.php");
$phoneNumber = "06 XX XX XX XX";
$mail = "a_phothirath@etu_webschoolfactory.fr";
$addresse = "20 rue manganta, 75018 Paris";
$linkedin= "Linkedin";
$github="Github";
$titlePage = "A propos de moi";
$prefixImage= "/Portfolio/image/";
$stylePage="style_about.css";

$contact = query("SELECT * FROM contact WHERE id=1")->fetch();
if(!$contact){
    extract($contact);
}
?>
<?php include '../inc/header.php' ?>

        <div class="headerfantom"></div>
        
        <div id="scroll_to_top">
            <a class="hvr-sweep-to-top" href="#top">&#11014;</a>
        </div>
        <!--Main-->
        <div class=main>
            <div id="scroll_to_top">
                <a href="#top">&#11014;</a>
            </div>
            <!--Card About-->
            <div class="about" id="partie1">
                <div class="slide_about">
                    <h1>Qui suis-je?</h1>
                </div>
                <div class="card about_card">
                    <div class="sub_about">
                        <div class="photo">
                            <img src="<?php echo $prefixImage ; ?>Photo.jpg" alt="" class="sub_photo">
                        </div>
                        <div class=bio>
                            <p>Je m'appelle Arthur PHOTHIRATH 24 ans, actuellement étudiant à la Tech And Code Factory pour un bachelor en informatique, je suis passionnée par les nouvelles technologies.</p>
                            <p>En dehors de l'informatique mes principaux centres d'interêts sont les jeux vidéos, la modélisation 3D, le cinéma et la natation. </p>
                            <p>Ce portfolio à pour but de présentéer les différents projets réalisés dans dans un cadre scolaire ou professionel. Vous pouvez aussi visualiser mon CV et le télécharger. </p>
                            <nav>
                                <a href="#" class="button hvr-push">Cv</a>
                            </nav>
                        </div>   
                    </div>
                </div>
            </div>

            <!--Card competence 1-->
            
            <div class="competence">
                <div class="slide_comp">
                    <h1>Compétence</h1>
                    <p class="trait">&#9472;</p>
                    <h3>Je connais<h3>
                </div>    
                <!-- Intérieur card -->
                <div class="card competence_card">
                    <div class="front">
                        <div>
                            <h5>Front-End</h5>
                        </div>
                        <div>
                            <img src="<?php echo $prefixImage ; ?>html.jpg" alt="" class="">
                            <img src="<?php echo $prefixImage ; ?>css3.jpg" alt="" class="">
                        </div>
                    </div>
                    <hr>
                    <div class="back">
                        <div>
                            <h5>Back-End</h5>
                        </div>
                        <div>
                            <img src="<?php echo $prefixImage ; ?>python.jpg" alt="" class="">
                            <img src="<?php echo $prefixImage ; ?>php.jpg" alt="" class="">
                        </div>
                    </div>  
                </div>
            </div>

            <!--Card competence 2-->

            <div class="competence">
                <div class="slide_comp">
                    <h1>Compétence</h1>
                    <p class="trait">&#9472;</p>
                    <h3>Je voudrais apprendre<h3>
                </div>    
                <!-- Intérieur card -->
                <div class="card competence_card">
                    <div class="front">
                        <div>
                            <h5>Front-End</h5>
                        </div>
                        <div>
                            <img src="<?php echo $prefixImage ; ?>java.jpg" alt="" class="">
                            <img src="<?php echo $prefixImage ; ?>bootstrap.jpg" alt="" class="">
                        </div>
                    </div>
                    <hr>
                    <div class="back">
                        <div>
                            <h5>Back-End</h5>
                        </div>
                        <div>
                            <img src="<?php echo $prefixImage ; ?>angular.jpg" alt="" class="">
                            <img src="<?php echo $prefixImage ; ?>Csharp.jpg" alt="" class="">
                        </div>
                    </div>  
                </div>
            </div>

            <!--Card parcours-->
            <div class="parcours" id="partie2">
                <div class="slide_comp">
                    <h1>Mon parcours</h1>
                </div>    

                <div class="card parcours_card">
                    <section class="timeline_area">
                        <div>
                            <h2>En cours</h2>
                            <h3>Tech and Code Factory</h3>
                            <h4>Bachelor Informatique</h4>
                        </div>
                        <div>
                            <h2>2019</h2>
                            <h3>Industrie aéronautique</h3>
                            <h4>Formation opérateur aréonautique</h4>
                        </div>
                        <div>
                            <h2>2016-2018</h2>
                            <h3>Université Paris Diderot</h3>
                            <h4>Licence : Sciences de la Vie </h4>
                        </div>
                        <div>
                            <h2>Juin 2015</h2>
                            <h3>Lycée Jules Ferry</h3>
                            <h4>Baccalauréat Scientifique</h4>
                        </div>
                    </section>
                </div>
            </div>    
        
        <!-- Card Contact -->
            <div class="about" id="contactpart">
                <div class="slide_about">
                    <h1>Me contacter</h1>
                </div>
                <div class="card about_card">
                    <div class="sub_about">
                        <div class="photo">
                        </div>
                        <div class=sub-contact>
                            <div class="detail">
                                <i class="fas fa-phone-square fa-2x"></i>
                                <p><?php echo $phoneNumber ?></p>
                            </div>
                            <div class="detail">
                                <i class="fas fa-envelope fa-2x"></i>
                                <p><?php echo $mail ?></p>
                            </div>
                            <div class="detail">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                <p><?php echo $addresse ?></p>
                            </div>
                            <div class="detail">
                                <i class="fab fa-linkedin fa-2x"></i>
                                <u><p><?php echo $linkedin ?></p></u>
                            </div>
                            <div class="detail">
                                <i class="fab fa-github-square fa-2x"></i>
                                <u><p><?php echo $github ?></p></u>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
        <!-- Footer -->
<?php include "../inc/footer.php" ?>