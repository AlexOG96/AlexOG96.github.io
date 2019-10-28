<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio7</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>
	
	Por favor, introduzca la base imponible de la factura: </br>
	<form action="T1Ejercicio7Parte2.php" method="post">
    	<input type="number" min="0" step="0.01" name="base" />
    	<input type="submit" name="submit" value="Calcula factura" />
	</form>
	
</body>
</html>