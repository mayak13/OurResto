<?php 

$moy=14;

if ($moy>10) {
	echo 'Bon resultats!<br>';
} else if ($moy==10) {
	echo "Resultats moyens<br>";
} else {
	echo "Mauvais resultats<br>";
}

switch ($moy) {
	case 10:
		echo "Resultats moyens<br>";
		break;
	case 14:
		echo 'Bon resultats!<br>';
		break;
	case 8:
		echo "Mauvais resultats<br>";
		break;
	default:
		echo "Hello";
		break;
}

?>