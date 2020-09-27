<!DOCTYPE html>
<html>
<head>
	<title>VARIABLE SUPER GLOBALE: GET</title>
	<meta charset="utf-8">
</head>
<body>

	<a href="presentationGet.php">Présentation</a>

	<form action="presentationGet.php" method="get"> <!--On va insérer du PHP donc on ajoute l'action
	 (là où on l'envoie) et la méthode-->
		<p>
			<p>
				<label for="nom">Nom: </label>
				<input type="text" name="nom" id="nom" required>
			</p>

			<p>
				<label for="prenom">Prénom: </label>
				<input type="text" name="prenom" id="prenom" required>
			</p>

			<p>
				<input type="submit" name="valider">
			</p>
		</p>
	</form>

</body>
</html>