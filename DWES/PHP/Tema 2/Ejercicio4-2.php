<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio4-2</title>
</head>
<body>
	
	<?php 
	echo $_POST["numero1"], " + ", $_POST["numero2"], " = ", $_POST["numero1"] + $_POST["numero2"],"</br>";
	echo $_POST["numero1"], " - ", $_POST["numero2"], " = ", $_POST["numero1"] - $_POST["numero2"],"</br>";
	echo $_POST["numero1"], " x ", $_POST["numero2"], " = ", $_POST["numero1"] * $_POST["numero2"],"</br>";
	echo $_POST["numero1"], " ÷ ", $_POST["numero2"], " = ", $_POST["numero1"] / $_POST["numero2"],"</br>";
	echo "<a href=Ejercicio4-1.php>Volver</a>";
	 ?>
</body>
</html>