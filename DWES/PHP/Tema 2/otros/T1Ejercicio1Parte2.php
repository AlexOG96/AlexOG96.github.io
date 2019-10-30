<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio1</title>
</head>
<body>

	<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		echo $_POST["x"], " x ", $_POST["y"], " = ", $_POST["x"] * $_POST["y"], "</br>";
		echo "<a href=T1Ejercicio1.php>Volver</a>";

	?>
	
</body>
</html>