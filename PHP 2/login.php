
<?php 
session_start(); // session start ne doit pas parraitre sous le code html.

if(isset($_POST['login'])and $_POST['login']=='Maya' and isset($_POST['mdp'])and $_POST['mdp']=='1234'){
		$_SESSION['Auth']=true;
	$_SESSION['username']=$_POST['login'];
}
else{
	$_SESSION['Auth']=false;

	}
	header('location:secret.php')
 ?>

