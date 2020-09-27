<?php

	try {
		#Création et connexion à la BDD 
		#1ere méthode: 
		#$BDD=new PDO('mysql:host=localhost;dbname=BDD_CSW;charset=utf8','root',''); #Elle contient 3 à 4 paramètres (1er: hôte et nom de la BDD, 2eme: login, 3eme: mot de passe) (on peut ajouter un 4eme paramètre: une erreur)

		#2eme méthode: (mettre chaque paramètre dans une variable)
		$host='mysql:host=localhost;dbname=our_restau;charset=utf8';
		$login='root';
		$password='';
		$error=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		$BDD=new PDO($host, $login, $password, $error);
	} catch (Exception $e) {
		die('Erreur!'.$e->getMessage()); #On met $e-> au lieu de $e. pour appeler la méthode car le . représente la concaténation et non un appel de méthode
	}
	
?>