<?php
require_once '../session.php';
if (isset($_GET['id'])){
    require_once '../../tools/db.php';
    query("DELETE FROM projects WHERE id=:id",  array('id' => $_GET['id']));
    header("Location: ../../list");
    die();
}
echo("Pas d'id");
?>