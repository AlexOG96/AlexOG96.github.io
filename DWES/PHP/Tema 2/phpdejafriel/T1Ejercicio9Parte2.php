<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio9</title>
</head>
<body>

	<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		echo "El cono de radio ", $_POST["radio"], " y altura ", $_POST["altura"]," tiene ", (1/3)*3.1416*pow($_POST["radio"], 2)*$_POST["altura"], " centímetros cúbicos de volumen.</br>";
		echo "<a href=T1Ejercicio9.php>Volver</a>";

	?>
	
</body>
</html>