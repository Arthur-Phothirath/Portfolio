<?php
$host 		= "localhost";
$dbname 	= "portfolio";
$username 	= "Arthur";
$password 	= "password";

try
{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
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