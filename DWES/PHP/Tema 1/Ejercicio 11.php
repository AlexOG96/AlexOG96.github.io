<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 11</title>
</head>
<body>
	<?php

		function piramideHueca($tamañoBase) {
			if ($tamañoBase%2==0) {
				echo "El tamaño de la base no es el apropiado";
			}
			else {
				$posicionInicial = ($tamañoBase-1)/2;
				$posicionFinal = ($tamañoBase-1)/2;
				$linea = array($tamañoBase);
				for ($i = 0; $i <= ($tamañoBase-1)/2; $i++) {
					for ($j = 0; $j <= $tamañoBase-1; $j++) {
						if ($j == $posicionInicial OR $j == $posicionFinal OR $i == ($tamañoBase-1)/2) {
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

		piramideHueca(9);

	?>

	
</body>
</html>