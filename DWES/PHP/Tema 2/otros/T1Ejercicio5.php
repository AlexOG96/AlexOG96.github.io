<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio5</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>
	
	Por favor, introduce la base y la altura del rectángulo: </br>
	<form action="T1Ejercicio5Parte2.php" method="post">
    	Base: <input type="number" name="base" /> Altura: <input type="number" name="altura" />
    	<input type="submit" name="submit" value="Calcular el área" />
	</form>
	
</body>
</html>