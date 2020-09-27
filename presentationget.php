<!DOCTYPE html>
<html>
<head>
	<title>Présentation</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
if(isset($_GET['nom']) and isset($_GET['prenom']) ){
echo "Bonjour ".$_GET['nom'].' '.$_GET['prenom'];
}
else {
	echo "Vous êtes Inconnus";
}

 ?>
</body>
</html>