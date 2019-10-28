<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio5</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

		echo "Un rectángulo de base ", $_POST["base"], " y altura ", $_POST["altura"], " tiene ", $_POST["base"] * $_POST["altura"], " centímetros cuadrados de área</br>";
		echo "<a href=T1Ejercicio5.php>Volver</a>";

	?>
	
</body>
</html>