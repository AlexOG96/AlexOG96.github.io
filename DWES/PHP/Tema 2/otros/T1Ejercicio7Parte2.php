<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio7</title>
</head>
<body>

	<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);


		echo "La factura cuya base imponible es ", $_POST["base"]," euros asciende a ", round($_POST["base"]*1.21, $precision=2), " euros </br>";
		echo "<a href=T1Ejercicio7.php>Volver</a>";

	?>
	
</body>
</html>