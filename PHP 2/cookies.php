<?php 
setcookie('mdp','mk',time()+60); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
echo $_COOKIE['mdp'];

 ?>
</body>
</html>