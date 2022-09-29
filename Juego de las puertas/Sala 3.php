<html>
	<head>
		<title>Sala 3</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/main.css">
		<style>

			.puerta {
				background-image: url("img/puerta3.png");
				background-size: cover;
				height: 96px;
				width: 48px;
				display: inline-block;
				cursor: pointer;
				margin: 20px;
				transition: .1s;
				border: none;
			}

			.puerta:hover {
				background-color: transparent;
				background-image: url("img/puerta3Hover.png");
			}

		</style>
	</head>
	<body>

		<?php

			$vidas = $_POST["vidas"];
			for($i=0; $i<$vidas; $i++){
				echo "<div class='vida'></div>";
			}

			//GENERAR 3-6 PUERTAS
			$numeroPuertas = rand(3, 6);
			$puertaSiguiente = rand(0, $numeroPuertas - 1);
			$puertaAnterior = null;

			if($numeroPuertas >= 3){
				do {
					$puertaAnterior = rand(0, $numeroPuertas - 1);
				} while($puertaAnterior == $puertaSiguiente);
			}

			echo "<div class='contenedor'>";
			echo "<h1>Sala 3</h1>";
			echo "<form method='POST' action='verificar.php'>";
			echo "<input style='display:none' name='vidas' value='". $vidas ."'/>";

			for($i=0; $i<$numeroPuertas; $i++){
				echo "<button value='";

				if($i == $puertaSiguiente){
					echo "Sala 4";
				} else if($i == $puertaAnterior && $puertaAnterior != null || $puertaAnterior == 0 && $i == $puertaAnterior){
					echo "anterior";
				} else {
					echo "muerte";
				}

				echo "' class='puerta' name='resultado'></button>";
			}
			echo "</form>";
			echo "</div>";

		?>

	</body>
</html>