<?php 
session_start();
	include ("connectBD.php"); // explication : Pour cette page login on a crée un pont de connexion entre la BDD et cette page , ensuite dans la table utilisateurs nous allons parcourir les utilisateurs et comparer leurs logins ainsi que leurs mdp pour leur conner accès ou non a la page.
	//toujours utiliser une variable booleenne pour verifier si c la bonne personne ou non.
	$rep=$bdd->query("SELECT * FROM utilisateurs");
	while ($donnee=$rep->fetch()) { //isset sert a verifier si un tuple est vide ou pas.
		if(isset($_POST['login']) and $donnee['login']==$_POST['login'] and isset($_POST['mdp'])and $donnee['mdp']==$_POST['mdp']) {
			$_SESSION['auth']=true;
			$_SESSION['pseudo']=$donnee['login'];//on peut utiliser post ou login
			$trouve=true;
		}
	}
	$rep->closeCursor();
		if (!$trouve) {
			$_SESSION['auth']=false;
		}

		header('location:secret.php');


 ?>