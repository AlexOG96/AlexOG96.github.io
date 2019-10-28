<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio9</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>
	
	Por favor, introduzca el radio y la altura del cono: </br>
	<form action="T1Ejercicio9Parte2.php" method="post">
    	<input type="number" name="radio" min="0" />
    	<input type="number" name="altura" min="0" />
    	<input type="submit" name="submit" value="Calcular volumen" />
	</form>
	
</body>
</html>