<?php 

	session_start(); #5- Déclarer la session
	include('connectBDD.php'); #1- Connexion à la BDD

	$recupdonnee=$BDD->query('SELECT * FROM admin'); #2- Récupérer les données de la BDD

	while ($donnee=$recupdonnee->fetch()) {#3- 
		if (isset($_POST['login']) && $donnee['pseudo']==$_POST['login'] && isset($_POST['mdp']) && $donnee['mdp']==$_POST['mdp']) { #4- Faire une comparaison pour vérifier si l'utilisateur connecté fait parti de la BDD
				$_SESSION['auth']=true; #6- Vérifier si c'est un vrai utilisateur
				$_SESSION['pseudo']=$donnee['pseudo']; #7- Vérifier le pseudo //On peut utiliser POST à la place de donnee
				$trouver=true; #8- Vérifier si l'utilisateur a été trouvé

	header('location:adminReservation.php'); #11- Envoyer vers la fenêtre secret.php
		}
	}

	$recupdonnee->closeCursor(); #9- Fermer recupdonnee

	if (!$trouver) { #10- Si l'utilisateur n'est pas trouvé
		$_SESSION['auth']=false;

	header('location:AdminConnect.php'); #11- Envoyer vers la fenêtre secret.php
	}

	
?>
