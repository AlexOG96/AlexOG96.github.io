<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio1</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>
	
	Por favor, introduzca dos números: </br>
	<form action="T1Ejercicio1Parte2.php" method="post">
    	<input type="number" name="x" /> x <input type="number" name="y" />
    	<input type="submit" name="submit" value="Multiplica" />
	</form>
	
</body>
</html>