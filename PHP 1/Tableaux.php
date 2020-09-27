<?php 

	$personne=array('Sofia', 'Yasmine');

	print_r($personne); #afficher les tableaux

	echo "<br><br>";

	for ($i=0; $i < 2; $i++) { 
		print_r('Hello '.$personne[$i].'<br>');
	}

	echo "<br><br>";

	foreach ($personne as $prsn) { #Afficher les valeurs du tableau sans préciser le nombre de i
		echo $prsn.'<br>';
	}

	$etudiant=array('Nom: '=>'MEHIDI','Prenom: '=>'Yasmine', 'Age: '=>23, 'Profession: '=>'Etudiant(e)'); #Déclarer un tableau avec des labels (nom, prénom, age...)
	print_r($etudiant);

	echo "<br><br>";

	foreach ($etudiant as $lab => $val) {
		echo $lab.' '.$val.'<br>';
	}

?>