<?php 

	include('connectBDD.php');

	#Insertion avec les requêtes préparées

	#Récupérer le pseudo et le msg de la BDD
	$pseudo=$_SESSION['pseudo']; 
	#dans post: id qu'on a attribué dans le formulaire
	$message=$_POST['msg'];

	#Récupérer la date:
	#Modifier la date du serveur (pour enlever l'heure d'été):
	date_default_timezone_get('Africa/Algiers');
	#Récupérer la date du serveur:
	$date=date('Y/m/d H:i:s',time()); #1er paramètre: format, 2eme: date

		try {
		#Utilisattion des requêtes préparées (pour assurer plus de sécurité): 1ere étape: préparer, 2eme étape: exécuter
		#1ere étape:
		$insert=$BDD->prepare('INSERT INTO avis (pseudo,commentaire,jour) VALUES(?,?,?)'); #On met comme paramètre les éléments qu'il y a dans la BDD
		#2eme étape:
		$insert->execute(array($pseudo,$message, $date)); #On met comme paramètre les variables déclarées

		$insert->closeCursor();

		#$_SESSION['avis']=true; on n'a pas besoin de session car on veut directement afficher le commentaire

		header('location:vosAvis.php');

	} catch (Exception $e) {
		die('erreur').$e->getMessage();
		#$_SESSION['avis']=false;
		header('location:insertAvis.php');
	}

?>