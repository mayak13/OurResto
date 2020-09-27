<?php 
	
	#Procédure
	function bienvenu($nom){ #Déclarer la procédure
		echo 'Bienvenus(es) '.$nom;
	}

	bienvenu('Yasmine'); #Appeler la procédure

	echo '<br><br>';

	#Fonction
	function somme($nbr1, $nbr2){
		return $nbr1+$nbr2;
	}

	echo 'La somme des deux nombres est: '.somme(2, 30);
?>