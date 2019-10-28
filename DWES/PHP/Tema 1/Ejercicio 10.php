<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php

		function piramide($tamañoBase) {
			if ($tamañoBase%2==0) {
				echo "El tamaño de la base tiene que ser impar";
			}
			else {
				$posicionInicial = ($tamañoBase-1)/2;
				$posicionFinal = ($tamañoBase-1)/2;
				$linea = array($tamañoBase);
				for ($i = 0; $i <= ($tamañoBase-1)/2; $i++) {
					for ($j = 0; $j <= $tamañoBase-1; $j++) {
						if ($j >= $posicionInicial && $j <= $posicionFinal) {
							$linea[$j] = "*";
						}
						else {
							$linea[$j] = "&nbsp;&nbsp;";
						}
						if ($j == $tamañoBase-1) {
							$posicionInicial = $posicionInicial-1;
							$posicionFinal = $posicionFinal+1;
							echo implode($linea);
							$linea = array();
						}
					}
					
					echo "<br />";
				}
			}
		}
		piramide("9");
	?>
	
</body>
</html>