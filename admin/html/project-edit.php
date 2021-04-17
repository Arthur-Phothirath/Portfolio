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
		tecnologies = :technologies,
		introduction = :introduction,
		conception = :conception,
		realization = :realization";

    $params = array(
        name => $_POST["name"],
        category => $_POST["category"],
        projectDate => $_POST["projectDate"],
		imageHome => $_POST["imageHome"],
		tecnologies => $_POST["technologies"],
		introduction => $_POST["introduction"],
		conception => $_POST["conception"],
		realization => $_POST["realization"],
	);
	if(!empty($_GET["id"])){
		$req = "UPDATE ".$req." WHERE id=:id";
		$params["id"] = $_GET["id"];
	}else{
		$req = "INSERT INTO ".$req ;
	}
    query($req, $params);
}

if(!empty($_GET["id"])){
	$projects = query("SELECT * FROM projects WHERE id=:id", ["id"=>$_GET["id"]])->fetch();
}else{
	$name =	$category =	$projectDate =	$imageHome =	$tecnologies =	$introduction =	$conception =	$realization = "";

}

if(!empty($projects)){
    extract($projects);
}
?>

<!-- FINIR FRONT -->

<?php include "../inc/header.php"; ?>

    <div id="content">
    <form method='post'>

		<label for="front">Front</label>
		<input type="radio" name="category" value="front" id="front">
		<label for="back">Back</label>
		<input type="radio" name="category" value="back" id="back">

        <div>
            <label>Nom</label>
            <input type = 'texte' name='phoneNumber' id='phoneNumber' value='<?php echo $name ?>'>
        </div>

        <div>
            <label>Mail</label>
            <input type = 'texte' name='mail' id='mail' value='<?php echo $mail ?>'>
        </div>

        <div>
            <label>Adresse</label>
            <input type = 'texte' name='addresse' id='addresse' value='<?php echo $addresse ?>'>
        </div>

        <button type='submit' name='update'>Modifier</button>


    </form>
    </div>

<?php include "../inc/footer.html"; ?>
