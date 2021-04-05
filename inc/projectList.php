<?php
$projectList = query("SELECT id, name, imageHome, projectDate, technologies FROM projects WHERE category= :category", ["category" => $category])->fetchAll();

if($category == "back"){
    $prefixProject = "project-back/";
}else{
    $prefixProject = "project-front/";
}

?>
        <div class="headerfantom"></div>
        
        <!-- Main-->
            <div id="scroll_to_top">
                <a href="#top">&#11014;</a>
            </div>
        <div class="container_home_front">
            <?php foreach($projectList as $project):
                extract($project);
                ?>
                <div class="projet1 card_main_front">
                        <img src="https://via.placeholder.com/480x864.png">
                    <a href= "<?php echo $prefixProject.$id ?>">              
                        <div class="texte_banniere_back card_main_front">
                            <h3><?php echo "$name <br> $projectDate <br> $technologies" ?>
                            </h3>
                        </div>
                    </a>   
                </div>
            <?php endforeach; ?>
            <div class="projet1 card_main_front">
                <img src="https://via.placeholder.com/480x864.png">
                <div class="texte_banniere_back card_main_front">
                    <h3>Projet 2</h3>
                </div>
            </div>
            <div class="projet1 card_main_front">
                <img  href="#" src="https://via.placeholder.com/480x864.png">
                <div class="texte_banniere_back card_main_front">
                    <h3>Projet 3</h3>
                </div>
            </div>
            <div class="projet1 card_main_front">
                <img  href="#" src="https://via.placeholder.com/480x864.png">
                <div class="texte_banniere_back card_main_front">
                    <h3>Projet 4</h3>
                </div>
            </div>
        </div>