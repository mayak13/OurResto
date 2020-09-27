<!DOCTYPE html>
<html>
<head>
	<title>PRESENTATION GET</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		#Vérifier les données avant de les afficher
		if (isset($_GET['nom']) and isset($_GET['prenom'])) { #soit and soit &&, pour ou: soit or soit ||

			echo 'Bonjour '.$_GET['nom'].' '.$_GET['prenom']; #On l'a concaténé avec la variable SG $_GET pour pouvoir la récupérer dans le fichier GET.php (la valeur du tableau doit être la même que celle du name et id de l'input voulu)

		} else {
			echo "Nom et prénom non reconnus!";
		}
	?>
</body>
</html>