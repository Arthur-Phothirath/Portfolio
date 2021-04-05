<?php
// require_once ("../tools/db.php");
$phoneNumber = "06 XX XX XX XX";
$mail = "a_phothirath@etu_webschoolfactory.fr";
$addresse = "20 rue manganta, 75018 Paris";

$contact = query("SELECT * FROM contact")->fetch();
if(!$contact){
    extract($contact);
}
?>

    <footer>
        <div class="retour">
            <a href="/">Back</a>
        </div>
        <div class="legal">
            <a href="mention">Mention légal</a>
        </div>
        <div class="foot_contact">
            <h4>&#128231; <?php echo $phoneNumber ?></h4>
            <h4>&#9990; <?php echo $mail ?></php></h4>
            <h4>&#128681;<?php echo $addresse ?></h4>
        </div>
    </footer>
    </div>
</body>
</html>