<!DOCTYPE html>
<html>
<head>
	<title>BOUCLES</title>
	<meta charset="utf-8">
</head>
<body>

<?php 

	for ($i=0; $i < 10; $i++) { 
		echo 'Je suis dans la boucle for, ligne: '.$i.'<br>';
	}

	echo '<br><br>';

	$i=0;

	while ( $i < 10) {
		echo 'Je suis dans la boucle while, ligne: '.$i.'<br>';
		$i++;
	}

?>

</body>
</html>