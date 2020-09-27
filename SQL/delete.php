<?php 
include("connectBD.php");
$delete=$bdd->query("DELETE FROM utilisateurs WHERE id='2'");
$delete->closeCursor();
$reponse=$bdd->query("SELECT * FROM utilisateurs"); //dans query on y met les requetes
	while($donnee=$reponse->fetch()){//utiiser -> a la place du point pour differencier de la concatenation
		//fetch nous permet de renvoyer le tableau de données 
		echo $donnee['login'].' '.$donnee["mdp"]."<br>";

	}
	$reponse->closeCursor();
 ?>