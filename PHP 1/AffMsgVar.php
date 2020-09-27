<!DOCTYPE html>
<html>
<head>
	<title>PHP 1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include('Inclusion.php') ?> <!--Inclure le fichier Inclusion.php-->
	<h3>Ma première page en PHP!</h3>
	<?php 
		echo "Bonjour! <br>"; #br fonctionne car le serveur ne le reconnaîtra pas donc il le passera au navigateur pour le traiter et ensuite revenir vers le serveur
		echo 'Hello! <br>';
		printf("Hey! <br>");
		$pseudo='Yasmine'; #$: variable
		$age=23;
		$note1=19.5;
		$note2=19;
		$moyenne=($note1+$note2)/2;
		echo 'Pseudo: '.$pseudo.', âge: '.$age.'ans, moyenne: '.$moyenne;
	?>
</body>
</html>