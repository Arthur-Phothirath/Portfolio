<?php
$a = '<a href="logout">Déconnexion</a>';
if(empty($_SESSION['user'])){
	$a ='<a href="login">Connexion</a>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
    <base href="/Portfolio/admin/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="style/styles.css">

</head>
<body>
	
	<header>
		<img src="images/logo.png">
	</header>

	<div class="flexbox">
		<nav>
			<ul>
				<li><a href="list">Voir tous les projets</a></li>
				<li><a href="add">Ajouter un projet</a></li>
                <li><a href="contact">Changer les données de contact</a></li>
				<li><?php echo $a ?></li>

			</ul>
			
		</nav>