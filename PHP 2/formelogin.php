<!DOCTYPE html>
<html>
<head>
	<title>FormeLogin</title>
	<meta charset="utf-8">
</head>
<body>

	<a href="login.php">LOGIN</a>

	<form action="login.php" method="post"> <!--On va insérer du PHP donc on ajoute l'action (là où on l'envoie) et la méthode-->
		<p>
			<p>
				<label for="login">Login: </label>
				<input type="text" name="login" id="login" required>
			</p>

			<p>
				<label for="mdp">Password: </label>
				<input type="text" name="mdp" id="mdp" required>
			</p>

			<p>
				<input type="submit" name="valider">
			</p>
		</p>
	</form>

</body>
</html>