<?php
session_start();


if(!empty($_SESSION['user'])){
header("Location: ../admin");
 die();
}

require_once '../../tools/db.php';

if (isset($_POST['login_username'])){
    $sql = "SELECT login_password FROM users WHERE login_username = :login_username";
    $params = array(
        ':login_username' => $_POST['login_username']
    );
    $lineData = query($sql,$params)->fetch();
    if(!empty($lineData) && password_verify($_POST["login_password"] ,$lineData["login_password"])){
        echo "connected";
        $_SESSION["user"] = "admin";
        header("Location: ../admin");
        die();
    }else{
        echo "not connected";
    }
}
?>
<?php include("../inc/header.php") ?>
    <div id="content">
    <!-- Forms -->
        <form method='post'>

            <div>
                <label>Username</label>
                <input type='texte' name='login_username' id='login_username'>
            </div>

            <div>
                <label>Password</label>
                <input type='texte' name='login_password' id='login_password'>
            </div>

            <button type='submit' name='SignIn'>Sign in</button>
        </form>
    </div>
<?php include("../inc/footer.html"); ?>