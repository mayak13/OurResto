<!DOCTYPE html>
<html>
<head>
	<title>VARIABLES SG</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		var_dump($_SERVER); #Récupérer les informations qui concerne le serveur (dans notre cas, toutes les informations concernant Apache)
		var_dump($_POST); #Récupérer les éléments envoyés d'un formulaire dans POST
		var_dump($_GET); #Récupérer les éléments envoyés d'un formulaire dans GET
		var_dump($_FILE); #Récupérer les images
		var_dump($_SESSION); #Récupérer les informations de l'utilisateur (mdp, email, nom...) dans un temps précis
		var_dump($_COOKIE); #Récupérer les informations de l'utilisateur indéfiniment (par exemple pour pouvoir définir les préférences de l'utilisateur)
		var_dump($_ENV); #Informations du système d'exploitation Linux
	?>
</body>
</html>