<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio11</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>
	
	Por favor, introduzca el número de Kb: </br>
	<form action="T1Ejercicio11Parte2.php" method="post">
    	<input type="number" name="kb" min="0"/>
    	<input type="submit" name="submit" value="Calcular Mb" />
	</form>
	
</body>
</html>