<?php

try
{
    $db = new PDO('mysql:host='.getenv("DB_HOST").';dbname='.getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
	die('Erreur : ' . $ex->getMessage());
}
function dd($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	die();
}

// A NOTER
function query($sql, $params = [])
{
    try
    {
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    catch(PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }
}

function imageVerification($file){



    $fileSize = $file["size"];
    $fileError = $file["error"];

    $infoFichier = pathinfo($file["name"]);
    $extensionFichier = $infoFichier['extension'];
    
    $format_file = array("jpg","jpeg", "png");

    $errors = [];
    if(in_array($extensionFichier, $format_file)){
        if($fileError === 0){
            if($fileSize > 100000){
                 array_push ($errors,"Le fichier est trop volumineux");
            }
        } elseif($fileError === 1) {
            array_push ($errors," 'The uploaded file exceeds the upload_max_filesize directive in php.ini");
        } elseif($fileError === 2) {
            array_push ($errors,"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form");
        } elseif($fileError === 3) {
            array_push ($errors,"The uploaded file was only partially uploaded");
        } elseif($fileError === 4) {
            array_push ($errors," 'No file was uploaded");
        } elseif($fileError === 6) {
            array_push ($errors,"Missing a temporary folder");
        } elseif($fileError === 7) {
            array_push ($errors,"Failed to write file to disk.");
        } elseif($fileError === 8) {
            array_push ($errors,"A PHP extension stopped the file upload.");
        }
    } else {
        array_push ($errors,"Format non pris en charge.");
    }
    return $errors;

}