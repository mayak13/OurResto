<?php 

include("connectBD.php");
$update=$bdd->query("UPDATE utilisateurs SET mdp='12345' WHERE login='Maya'"); //modifier le mdp 'nouveau mdp=12345'
$update->closeCursor();
$reponse=$bdd->query("SELECT * FROM utilisateurs"); //dans query on y met les requetes
	while($donnee=$reponse->fetch()){//utiiser -> a la place du point pour differencier de la concatenation
		//fetch nous permet de renvoyer le tableau de données 
		echo $donnee['login'].' '.$donnee["mdp"]."<br>";

	}
	$reponse->closeCursor();
 ?>