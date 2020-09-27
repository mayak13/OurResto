<?php 
session_start();//ON FOIT TJR IMPORTER LA SESSION SUR LAQUELLE ON TRAVAILLE
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
if ($_SESSION['auth']==true) {
	echo "Bienvenue".$_SESSION['pseudo'].'<br>'.'<a href="logout.php">Deconection</a>';

}
else{ echo 'Données Fausses<a href="formelogin.php">Réessayer</a>';}

 ?>
</body>
</html>