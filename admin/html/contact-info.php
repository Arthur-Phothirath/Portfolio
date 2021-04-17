<?php
require_once '../../tools/slugify.php';
require_once '../../tools/db.php';
$title= "Information de contact";

if(isset($_POST['update'])){
    
    $reqUpdate ="UPDATE contact SET
        phoneNumber = :phoneNumber,
        mail = :mail,
        addresse = :addresse";

    $paramsUpdate = array(
        'phoneNumber' => $_POST['phoneNumber'],
        'mail' => $_POST['mail'],
        'addresse' => $_POST['addresse'],
);

    query($reqUpdate, $paramsUpdate);
}

$contact = query("SELECT * FROM contact")->fetch();
if(!empty($contact)){
    extract($contact);
}
?>

<?php include "../inc/header.php"; ?>

    <div id="content">
        <form method='post'>

            <div>
                <label>Numéro de téléphone</label>
                <input type = 'texte' name='phoneNumber' id='phoneNumber' value='<?php echo $phoneNumber ?>'>
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
