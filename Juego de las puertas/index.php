<html>
	<head>
		<title>Sala 1</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/main.css">
		<style>

			.puerta {
				background-image: url("img/puerta1.png");
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
				background-image: url("img/puerta1Hover.png");
			}

			.vida {
				background-image: url("img/vida.png");
				background-size: cover;
				height: 32px;
				width: 26px;
				display: inline-block;
				margin: 20px;
				cursor: pointer;
				transition: .5s ease;
			}

			.vida:hover {
				transform: rotate(360deg);
			}

		</style>
	</head>
	<body>

		<?php

			$vidas = 3;
			for($i=0; $i<$vidas; $i++){
				echo "<div class='vida'></div>";
			}

			//GENERAR 2 PUERTAS
			$numeroPuertas = 2;
			$puertaSiguiente = rand(0, $numeroPuertas - 1);
			echo "<div class='contenedor'>";
			echo "<h1>Sala 1</h1>";
			echo "<form method='POST' action='verificar.php'>";
			echo "<input style='display:none' name='vidas' value='". $vidas ."'/>";

			for($i=0; $i<$numeroPuertas; $i++){
				echo "<button value='";

				if($i == $puertaSiguiente){
					echo "Sala 2";
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