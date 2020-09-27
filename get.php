<!DOCTYPE html>
<html>
<head>
	<title>get</title>
	<meta charset="utf-8">
</head>
<body>
<a href="presentationget.php">Présentation</a>
<form action="presentationget.php" method="get">
	<p>
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required>
	</p>
	<p>
		<label for="prenom">Prenom :</label>
		<input type="text" name="prenom" id="prenom" required>
	</p>
	<p>
		<input type="submit" value="valider">
	</p>

</form>
</body>
</html>