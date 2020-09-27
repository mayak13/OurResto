<!DOCTYPE html>
<html>
<head>
	<title>variableSG</title>
	<meta charset="utf-8">
</head>
<body>
<?php // une var super globale secrit avec $_TTENMAJUSCULE
var_dump($_SERVER);#informations concernant le serveur qui est appache pour nous ici
var_dump($_POST);#données post
var_dump($_GET);#données get
var_dump($_FILE);#données file
var_dump($_SESSION);#informations concernant l'utilisateur
var_dump($_COOKIE);#habitudes de l'utilisateur
var_dump($_ENV);#informations concernant le SE linux

 ?>
</body>
</html>