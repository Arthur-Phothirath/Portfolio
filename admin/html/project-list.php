<?php
require_once '../../tools/slugify.php';
require_once '../../tools/db.php';
$title= "Liste des projets";

$projectList = query("SELECT id, name, projectDate, technologies, createdAt FROM projects")->fetchAll();

?>

<?php include "../inc/header.php"; ?>



<div class="content">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Date du projet</th>
                <th>Technologie</th>
                <th>Date de l'upload du projet</th>
                <th>Paramètre</th>
            </tr>
            <tbody>
                <?php 
                foreach($projectList as $project){
                    echo 
                    '<tr>
                    <td>'.$project['name'].'</td>
                    <td>'.$project['projectDate'].'</td>
                    <td>'.$project['technologies'].'</td>
                    <td>'.$project['createdAt'].'</td>

                    <td>
                        <a href="project-edit.php?id='.$project['id'].'" class="btn btn-outline-dark btn-block">Modifier</a>
                        <a href="project-delete.php?id='.$project['id'].'" class="btn btn-outline-dark btn-block">Supprimer</a>
                    </td>';
                }
                ?>
            </tbody>
    </table>
</div>

<?php include "../inc/footer.html"; ?>
