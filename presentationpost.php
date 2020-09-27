<!DOCTYPE html>
<html>
<head>
	<title>presentation</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
if (isset($_POST['nom']) and isset($_POST['prenom'])  ) {
	
echo "bonjour ".htmlspecialchars($_POST['nom']).' '.htmlspecialchars($_POST['prenom']);

}
else {
	echo "nom ou prenom non introduit";
}


 ?>
</body>
</html>