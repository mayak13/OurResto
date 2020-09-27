<?php 

	session_start();
	include('connectBDD.php');

	$login=$_POST['login'];
	$mdp=$_POST['mdp'];

	try {
		#Utilisattion des requêtes préparées (pour assurer plus de sécurité): 1ere étape: préparer, 2eme étape: exécuter
		#1ere étape:
		$insert=$BDD->prepare('INSERT INTO utilisateurs (login,mdp) VALUES(?,?)'); #?,?: permet d'éviter le rejet d'SQL
		#2eme étape:
		$insert->execute(array($login, $mdp)); #$login remplace le 1er ? et $mdp le 2eme

		$_SESSION['inscrit']=true;

		$insert->closeCursor();

		header('location:connexion.php');

	} catch (Exception $e) {
		die('erreur').$e->getMessage();
		$_SESSION['inscrit']=false; #Remplacer cette instruction par une condition qui renvoie une boîte de dialogue qui dit: Inscription échouée, sur JavaScript
		header('location:inscription.php');
	}

?>