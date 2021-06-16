<?php
require_once '../session.php';
require_once '../../tools/slugify.php';
require_once '../../tools/db.php';
$title= "Modification du projet";
if(isset($_POST['update'])){
    
    $req ="projects SET
        name = :name,
        category = :category,
        projectDate = :projectDate,
		imageHome = :imageHome,
		technologies = :technologies,
		introduction = :introduction,
		conception = :conception,
		realization = :realization";

    $params = array(
        "name" => $_POST["name"],
        "category" => $_POST["category"],
        "projectDate" => $_POST["projectDate"],
		"imageHome" => $_POST["image_hidden"],
		"technologies" => $_POST["technologies"],
		"introduction" => $_POST["introduction"],
		"conception" => $_POST["conception"],
		"realization" => $_POST["realization"],
	);
    $file = $_FILES["image"];
    $errors = imageVerification($file);
    if(empty($errors)){
        $to = "../../images";
        
        if ($file ['error'] === 0) {
            $params['imageHome'] = uniqid('', true)."." . pathinfo($file ['name'])['extension'];
            move_uploaded_file($file['tmp_name'], $to.$params['imageHome']);
            
            if (!empty($_POST['image_hidden'])) {
                unlink($to . $_POST['image_hidden']);
            }
        }

        if(!empty($_GET["id"])){
            $req = "UPDATE ".$req." WHERE id=:id";
            $params["id"] = $_GET["id"];
        }else{
            $req = "INSERT INTO ".$req ;
        }
        query($req, $params);
    }else{
        dd($errors);
    }
}

if(!empty($_GET["id"])){
	$projects = query("SELECT * FROM projects WHERE id=:id", ["id"=>$_GET["id"]])->fetch();
}else{
	$name =	$category =	$projectDate =	$imageHome =	$technologies =	$introduction =	$conception =	$realization = "";

}

if(!empty($projects)){
    extract($projects);
}
?>

<!-- FINIR FRONT -->

<?php include "../inc/header.php"; ?>

    <div id="content">
    <form method='post' enctype="multipart/form-data">


		<label for="front">Front</label>
		<input type="radio" name="category" value="front" id="front">
		<label for="back">Back</label>
		<input type="radio" name="category" value="back" id="back">

        <div>
            <label for='name'>Nom</label>
            <input type = 'texte' name='name' id='name' value='<?php echo $name ?>'>
        </div>

        <div>
            <label for="projectDate" >Date du projet</label>
            <input type = 'texte' name='projectDate' id='projectDate' value='<?php echo $projectDate ?>'>
        </div>

        <div>
            <label for="technologies">Technologie</label>
            <input type = 'texte' name='technologies' id='technologies' value='<?php echo $technologies ?>'>
        </div>

        <div>
            <label for="introduction">Introduction</label>
            <textarea name="introduction" id='introdction' ><?php echo $introduction?></textarea>
        </div>

        <div>
            <label for="conception">Conception</label>
            <textarea name="conception" id='conception' ><?php echo $conception?></textarea>
        </div>


        <div>
            <label for="realization">Réalisation</label>
            <textarea name="realization" id='realization' ><?php echo $realization?></textarea>
        </div>

        <button type='submit' name='update'>Modifier</button>

        <label for="image">Image du projet
                <input type="file" name="image" id="image">
                <input type="text" name="image_hidden" hidden value="<?php echo $imageHome; ?>">
            </label>

    </form>
    </div>
    

<?php include "../inc/footer.html"; ?>
