<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T1Ejercicio11</title>
</head>
<body>

	<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		echo $_POST["kb"], " kilobytes son ", $_POST["kb"]/1000, " megabytes </br>";
		echo "<a href=T1Ejercicio11.php>Volver</a>";

	?>
	
</body>
</html>