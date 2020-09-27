<?php 
//connexion à la BDD:
try {
	$host='mysql:host=localhost;dbname=mk;charset=utf8';
	$login='root';
	$password="";
	$erreur=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$bdd= new PDO($host,$login,$password,$erreur);
	//$bdd=new PDO("mysql:host=localhost;dbname=mk;charset=utf8","root","");
} catch (Exception $e) {
	die("erreur".$e->getMessage());
}
 ?>
