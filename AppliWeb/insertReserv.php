<?php 

	session_start();
	include('connectBDD.php');

	#Insertion avec les requêtes préparées
	$nom=$_POST['nom']; #dans post: id qu'on a attribué dans le formulaire
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$nbrPersonnes=$_POST['nbr'];
	$jour=$_POST['date'];
	$heure=$_POST['heure'];

		try {
		#Utilisattion des requêtes préparées (pour assurer plus de sécurité): 1ere étape: préparer, 2eme étape: exécuter
		#1ere étape:
		$insert=$BDD->prepare('INSERT INTO reservations (nom,prenom,email,tel,personnes,jour,heure) VALUES(?,?,?,?,?,?,?)'); #On met comme paramètre les éléments qu'il y a dans la BDD
		#2eme étape:
		$insert->execute(array($nom,$prenom,$email,$tel,$nbrPersonnes,$jour,$heure)); #On met comme paramètre les variables déclarées

		$_SESSION['reserv']=true;

		$insert->closeCursor();

		header('location:reservations.php');

	} catch (Exception $e) {
		die('erreur').$e->getMessage();
		$_SESSION['reserv']=false;
		header('location:insertReserv.php');
	}

?>